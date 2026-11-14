<?php

namespace Webkul\PluginManager;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Process\Exceptions\ProcessTimedOutException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Process;
use RuntimeException;
use Throwable;
use Webkul\PluginManager\Filament\Resources\PluginResource;
use Webkul\PluginManager\Jobs\InstallPlugin;
use Webkul\PluginManager\Models\Plugin;

/**
 * Runs plugin installs outside of the web request.
 *
 * Installing a plugin (and its dependencies) runs migrations, seeders and
 * permission generation, which can take longer than a web request is allowed
 * to live. The web UI therefore only queues an {@see InstallPlugin} job, and
 * this class tracks the progress of that job in the cache so the plugins table
 * can show it.
 */
class PluginInstaller
{
    public const STATUS_QUEUED = 'queued';

    public const STATUS_RUNNING = 'running';

    public const STATUS_FAILED = 'failed';

    public const DEFAULT_TIMEOUT = 1800;

    /**
     * Queue the install of a plugin and remember that it is pending.
     */
    public static function queue(Plugin $plugin, ?Authenticatable $user = null): void
    {
        static::setStatus($plugin->name, static::STATUS_QUEUED);

        InstallPlugin::dispatch($plugin->name, $user?->getAuthIdentifier());
    }

    /**
     * Run the install command for a plugin in a fresh PHP process.
     *
     * Never throws: the outcome is stored as the plugin's install status and
     * sent to the user who started the install as a database notification.
     */
    public function install(string $pluginName, mixed $userId = null): bool
    {
        static::setStatus($pluginName, static::STATUS_RUNNING);

        try {
            $this->runInstallCommand($pluginName);

            Plugin::query()
                ->where('name', $pluginName)
                ->update([
                    'is_installed' => true,
                    'is_active'    => true,
                ]);

            Package::$plugins = Plugin::all()->keyBy('name');

            static::forgetStatus($pluginName);

            static::notifyInstalled($pluginName, $userId);

            return true;
        } catch (Throwable $e) {
            static::markFailed($pluginName, $e->getMessage(), $userId);

            logger()->error('Plugin installation failed', [
                'plugin' => $pluginName,
                'error'  => $e->getMessage(),
                'trace'  => $e->getTraceAsString(),
            ]);

            return false;
        }
    }

    protected function runInstallCommand(string $pluginName): void
    {
        $timeout = static::timeout();

        try {
            $result = Process::path(base_path())
                ->timeout($timeout)
                ->run([
                    Package::phpBinaryPath(),
                    base_path('artisan'),
                    "{$pluginName}:install",
                    '--no-interaction',
                ]);
        } catch (ProcessTimedOutException) {
            throw new RuntimeException(__('plugin-manager::filament/resources/plugin.notifications.installed-failed.timeout', [
                'minutes' => (int) ceil($timeout / 60),
            ]));
        }

        if ($result->failed()) {
            $output = trim($result->output()."\n".$result->errorOutput());

            $lastLines = implode(PHP_EOL, array_slice(preg_split('/\R/', $output) ?: [], -10));

            throw new RuntimeException(
                "Installation failed with exit code {$result->exitCode()}.".
                    ($lastLines !== '' ? " Last output: {$lastLines}" : '')
            );
        }
    }

    public static function markFailed(string $pluginName, string $message, mixed $userId = null): void
    {
        static::setStatus($pluginName, static::STATUS_FAILED, $message);

        static::notifyFailed($pluginName, $message, $userId);
    }

    /**
     * Seconds the install command may run before it is stopped.
     */
    public static function timeout(): int
    {
        return (int) config('plugin-manager.install_timeout', static::DEFAULT_TIMEOUT);
    }

    /**
     * @return array{status: string, message: ?string, updated_at: string}|null
     */
    public static function status(string $pluginName): ?array
    {
        return Cache::get(static::statusKey($pluginName));
    }

    public static function isPending(string $pluginName): bool
    {
        return in_array(static::status($pluginName)['status'] ?? null, [static::STATUS_QUEUED, static::STATUS_RUNNING], true);
    }

    public static function hasFailed(string $pluginName): bool
    {
        return (static::status($pluginName)['status'] ?? null) === static::STATUS_FAILED;
    }

    public static function hasPendingInstalls(): bool
    {
        $keys = Plugin::query()
            ->where('is_installed', false)
            ->pluck('name')
            ->map(fn (string $name) => static::statusKey($name))
            ->all();

        if ($keys === []) {
            return false;
        }

        return collect(Cache::many($keys))
            ->filter()
            ->contains(fn (array $status) => in_array($status['status'], [static::STATUS_QUEUED, static::STATUS_RUNNING], true));
    }

    public static function forgetStatus(string $pluginName): void
    {
        Cache::forget(static::statusKey($pluginName));
    }

    protected static function setStatus(string $pluginName, string $status, ?string $message = null): void
    {
        // Keep the status a little longer than an install may take, so a job
        // that never reports back (e.g. no queue worker) does not hide the
        // install button forever.
        Cache::put(static::statusKey($pluginName), [
            'status'     => $status,
            'message'    => $message,
            'updated_at' => now()->toIso8601String(),
        ], static::timeout() + 3600);
    }

    protected static function statusKey(string $pluginName): string
    {
        return "plugin-manager:install-status:{$pluginName}";
    }

    protected static function notifyInstalled(string $pluginName, mixed $userId): void
    {
        $user = static::resolveUser($userId);

        if (! $user) {
            return;
        }

        Notification::make()
            ->title(__('plugin-manager::filament/resources/plugin.notifications.installed.title'))
            ->body(__('plugin-manager::filament/resources/plugin.notifications.installed.body', ['name' => $pluginName]))
            ->success()
            ->actions([
                Action::make('reload')
                    ->label(__('plugin-manager::filament/resources/plugin.notifications.installed.reload'))
                    ->url(static::pluginsUrl()),
            ])
            ->sendToDatabase($user);
    }

    protected static function notifyFailed(string $pluginName, string $message, mixed $userId): void
    {
        $user = static::resolveUser($userId);

        if (! $user) {
            return;
        }

        Notification::make()
            ->title(__('plugin-manager::filament/resources/plugin.notifications.installed-failed.title'))
            ->body($message)
            ->danger()
            ->sendToDatabase($user);
    }

    protected static function resolveUser(mixed $userId): mixed
    {
        if ($userId === null) {
            return null;
        }

        $model = config('auth.providers.users.model');

        return $model ? $model::find($userId) : null;
    }

    protected static function pluginsUrl(): ?string
    {
        try {
            return PluginResource::getUrl('index');
        } catch (Throwable) {
            return null;
        }
    }
}
