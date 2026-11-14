<?php

use Filament\Actions\Testing\TestAction;
use Illuminate\Process\Exceptions\ProcessTimedOutException;
use Illuminate\Process\PendingProcess;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\URL;
use Livewire\Livewire;
use Symfony\Component\Process\Exception\ProcessTimedOutException as SymfonyTimedOutException;
use Symfony\Component\Process\Process as SymfonyProcess;
use Webkul\PluginManager\Filament\Resources\PluginResource\Pages\ListPlugins;
use Webkul\PluginManager\Jobs\InstallPlugin;
use Webkul\PluginManager\Models\Plugin;
use Webkul\PluginManager\PluginInstaller;

require_once __DIR__.'/../../../support/tests/Helpers/TestBootstrapHelper.php';
require_once __DIR__.'/../../../support/tests/Helpers/FilamentHelper.php';

beforeEach(function () {
    URL::resolveMissingNamedRoutesUsing(fn () => '#');

    $this->user = FilamentHelper::actingAs([
        'view_any_plugin_manager_plugin',
        'view_plugin_manager_plugin',
    ]);

    $this->plugin = Plugin::updateOrCreate(['name' => 'blogs'], [
        'is_installed' => false,
        'is_active'    => false,
    ]);

    Cache::flush();
});

function runInstallJob(string $pluginName, mixed $userId = null): void
{
    (new InstallPlugin($pluginName, $userId))->handle(app(PluginInstaller::class));
}

it('queues the install from the plugins table instead of running it in the request', function () {
    Queue::fake();
    Process::fake();

    Livewire::test(ListPlugins::class)
        ->callAction(TestAction::make('install')->table($this->plugin))
        ->assertNotified();

    Queue::assertPushed(InstallPlugin::class, fn (InstallPlugin $job) => $job->pluginName === 'blogs'
        && $job->userId === $this->user->id
        && $job->timeout > PluginInstaller::timeout());

    Process::assertNothingRan();

    expect(PluginInstaller::isPending('blogs'))->toBeTrue()
        ->and($this->plugin->fresh()->is_installed)->toBeFalsy();
});

it('hides the install action while an install is pending', function () {
    Queue::fake();

    PluginInstaller::queue($this->plugin, $this->user);

    Livewire::test(ListPlugins::class)
        ->assertActionHidden(TestAction::make('install')->table($this->plugin));

    expect(PluginInstaller::hasPendingInstalls())->toBeTrue();
});

it('runs the install command in a separate process and notifies the user', function () {
    Process::fake(['*' => Process::result('🎉 Package blogs has been installed!')]);

    runInstallJob('blogs', $this->user->id);

    Process::assertRan(fn (PendingProcess $process) => in_array('blogs:install', $process->command, true)
        && in_array('--no-interaction', $process->command, true)
        && $process->timeout === PluginInstaller::timeout());

    expect($this->plugin->fresh()->is_installed)->toBeTruthy()
        ->and(PluginInstaller::status('blogs'))->toBeNull()
        ->and($this->user->notifications()->count())->toBe(1)
        ->and($this->user->notifications()->first()->data['title'])
        ->toBe(__('plugin-manager::filament/resources/plugin.notifications.installed.title'));
});

it('keeps the plugin uninstalled and reports the error when the install command fails', function () {
    Process::fake(['*' => Process::result(errorOutput: 'SQLSTATE[42S01]: table already exists', exitCode: 1)]);

    runInstallJob('blogs', $this->user->id);

    $status = PluginInstaller::status('blogs');

    expect($this->plugin->fresh()->is_installed)->toBeFalsy()
        ->and($status['status'])->toBe(PluginInstaller::STATUS_FAILED)
        ->and($status['message'])->toContain('exit code 1')
        ->and($status['message'])->toContain('table already exists')
        ->and(PluginInstaller::isPending('blogs'))->toBeFalse()
        ->and($this->user->notifications()->first()->data['title'])
        ->toBe(__('plugin-manager::filament/resources/plugin.notifications.installed-failed.title'));
});

it('reports a timeout when the install command runs too long', function () {
    config(['plugin-manager.install_timeout' => 120]);

    Process::fake(function () {
        $process = new SymfonyProcess(['true']);

        throw new ProcessTimedOutException(
            new SymfonyTimedOutException($process, SymfonyTimedOutException::TYPE_GENERAL),
            Process::result(exitCode: 124),
        );
    });

    runInstallJob('blogs', $this->user->id);

    expect(PluginInstaller::status('blogs')['message'])->toBe('Installation timed out after 2 minutes.')
        ->and($this->plugin->fresh()->is_installed)->toBeFalsy();
});

it('skips the job when the same install is already running in another worker', function () {
    Process::fake();

    $lock = Cache::lock(InstallPlugin::lockKey('blogs'), 60);

    $lock->get();

    runInstallJob('blogs', $this->user->id);

    Process::assertNothingRan();

    $lock->release();
});

it('marks the install as failed when the queue worker gives up on the job', function () {
    Queue::fake();

    PluginInstaller::queue($this->plugin, $this->user);

    (new InstallPlugin('blogs', $this->user->id))->failed(new RuntimeException('Job has timed out.'));

    expect(PluginInstaller::hasFailed('blogs'))->toBeTrue()
        ->and(PluginInstaller::hasPendingInstalls())->toBeFalse()
        ->and(PluginInstaller::status('blogs')['message'])->toBe('Job has timed out.');
});
