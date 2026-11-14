<?php

namespace Aall\ThaiLocalization;

use Aall\ThaiLocalization\Console\Commands\SetupCompanyCommand;
use Webkul\PluginManager\Console\Commands\InstallCommand;
use Webkul\PluginManager\Console\Commands\UninstallCommand;
use Webkul\PluginManager\Package;
use Webkul\PluginManager\PackageServiceProvider;

class ThaiLocalizationServiceProvider extends PackageServiceProvider
{
    public static string $name = 'thai-localization';

    public function configureCustomPackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasCommand(SetupCompanyCommand::class)
            ->hasDependencies([
                'accounts',
            ])
            ->hasSeeder('Aall\\ThaiLocalization\\Database\\Seeders\\DatabaseSeeder')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->installDependencies()
                    ->runsSeeders();
            })
            ->hasUninstallCommand(function (UninstallCommand $command) {});
    }
}
