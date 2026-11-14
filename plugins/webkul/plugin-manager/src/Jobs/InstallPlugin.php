<?php

namespace Webkul\PluginManager\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;
use Throwable;
use Webkul\PluginManager\PluginInstaller;

class InstallPlugin implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    /**
     * A job that is picked up again while the first run is still going (the
     * queue's retry_after is shorter than an install) must not be counted as
     * a failed attempt, so attempts are not limited. Any exception that
     * escapes handle() still fails the job straight away.
     */
    public $tries = 0;

    public $maxExceptions = 1;

    public $failOnTimeout = true;

    public $timeout;

    public function __construct(
        public string $pluginName,
        public mixed $userId = null,
    ) {
        // Leave the install command time to stop on its own timeout and
        // report back before the worker kills this job.
        $this->timeout = PluginInstaller::timeout() + 60;

        $this->onConnection(config('plugin-manager.install_queue_connection'));

        $this->onQueue(config('plugin-manager.install_queue'));
    }

    public function handle(PluginInstaller $installer): void
    {
        $lock = Cache::lock(static::lockKey($this->pluginName), $this->timeout);

        if (! $lock->get()) {
            // The same install is already running in another worker.
            $this->delete();

            return;
        }

        try {
            $installer->install($this->pluginName, $this->userId);
        } finally {
            $lock->release();
        }
    }

    public function failed(?Throwable $exception): void
    {
        PluginInstaller::markFailed(
            $this->pluginName,
            $exception?->getMessage() ?: 'The installation job failed.',
            $this->userId,
        );
    }

    public static function lockKey(string $pluginName): string
    {
        return "plugin-manager:install-lock:{$pluginName}";
    }
}
