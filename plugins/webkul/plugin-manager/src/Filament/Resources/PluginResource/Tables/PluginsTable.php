<?php

namespace Webkul\PluginManager\Filament\Resources\PluginResource\Tables;

use Exception;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Support\Enums\IconSize;
use Filament\Support\Enums\TextSize;
use Filament\Support\Enums\Width;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\RecordActionsPosition;
use Filament\Tables\Table;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema as DBSchema;
use Throwable;
use Webkul\PluginManager\Console\Commands\UninstallCommand;
use Webkul\PluginManager\Filament\Resources\PluginResource;
use Webkul\PluginManager\Models\Plugin;
use Webkul\PluginManager\Package;
use Webkul\PluginManager\PluginInstaller;

class PluginsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    IconColumn::make('package_icon')
                        ->label('')
                        ->state(true)
                        ->icon('heroicon-o-puzzle-piece')
                        ->size(IconSize::ExtraLarge)
                        ->color('primary')
                        ->visible(fn ($record) => ! $record?->package?->icon)
                        ->grow(false),

                    ImageColumn::make('package_image')
                        ->label('')
                        ->getStateUsing(fn ($record) => $record?->package?->icon
                            ? asset("svg/{$record->package->icon}.svg")
                            : null)
                        ->imageSize(100)
                        ->visible(fn ($record) => $record?->package?->icon)
                        ->grow(false),

                    Stack::make([
                        Split::make([
                            TextColumn::make('name')
                                ->weight('semibold')
                                ->searchable()
                                ->size(TextSize::Large)
                                ->formatStateUsing(fn (string $state) => PluginResource::localize('names', $state, ucfirst($state)))
                                ->grow(false),

                            TextColumn::make('latest_version')
                                ->label(__('plugin-manager::filament/resources/plugin.table.version'))
                                ->default('1.0.0')
                                ->badge()
                                ->color('info'),
                        ]),

                        TextColumn::make('summary')
                            ->color('gray')
                            ->limit(80)
                            ->wrap()
                            ->formatStateUsing(fn ($state, $record) => PluginResource::localize('summaries', $record->name, $state)),

                        Split::make([
                            TextColumn::make('is_installed')
                                ->badge()
                                ->inline()
                                ->grow(false)
                                ->formatStateUsing(fn ($record) => match (static::installState($record)) {
                                    'installed'                     => __('plugin-manager::filament/resources/plugin.status.installed'),
                                    PluginInstaller::STATUS_QUEUED  => __('plugin-manager::filament/resources/plugin.status.queued'),
                                    PluginInstaller::STATUS_RUNNING => __('plugin-manager::filament/resources/plugin.status.installing'),
                                    PluginInstaller::STATUS_FAILED  => __('plugin-manager::filament/resources/plugin.status.failed'),
                                    default                         => __('plugin-manager::filament/resources/plugin.status.not_installed'),
                                })
                                ->tooltip(fn ($record) => ! $record->is_installed ? PluginInstaller::status($record->name)['message'] ?? null : null)
                                ->color(fn ($record) => match (static::installState($record)) {
                                    'installed'                                                => 'success',
                                    PluginInstaller::STATUS_QUEUED, PluginInstaller::STATUS_RUNNING => 'warning',
                                    PluginInstaller::STATUS_FAILED                             => 'danger',
                                    default                                                    => 'gray',
                                }),

                            TextColumn::make('dependencies_count')
                                ->label(__('plugin-manager::filament/resources/plugin.table.dependencies'))
                                ->state(fn ($record) => count($record->getDependenciesFromConfig()))
                                ->badge()
                                ->color('warning')
                                ->suffix(__('plugin-manager::filament/resources/plugin.table.dependencies_suffix'))
                                ->default(0),
                        ]),
                    ])->space(1),
                ]),
            ])
            ->extraAttributes(['class' => 'plugins-table'])
            ->poll(fn () => PluginInstaller::hasPendingInstalls() ? '5s' : null)
            ->contentGrid([
                'sm'  => 1,
                'md'  => 2,
                'lg'  => 2,
                'xl'  => 3,
                '2xl' => 4,
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make()->icon('heroicon-o-eye'),

                    Action::make('install')
                        ->label(__('plugin-manager::filament/resources/plugin.actions.install.title'))
                        ->icon('heroicon-o-arrow-down-tray')
                        ->color('success')
                        ->visible(fn ($record) => ! $record->is_installed && ! PluginInstaller::isPending($record->name))
                        ->requiresConfirmation()
                        ->modalHeading(fn ($record) => __('plugin-manager::filament/resources/plugin.actions.install.heading', ['name' => $record->name]))
                        ->modalDescription(fn ($record) => __('plugin-manager::filament/resources/plugin.actions.install.description', ['name' => $record->name]))
                        ->modalSubmitActionLabel(__('plugin-manager::filament/resources/plugin.actions.install.submit'))
                        ->action(function ($record) {
                            PluginInstaller::queue($record, auth()->user());

                            Notification::make()
                                ->title(__('plugin-manager::filament/resources/plugin.notifications.install-queued.title'))
                                ->body(__('plugin-manager::filament/resources/plugin.notifications.install-queued.body', ['name' => $record->name]))
                                ->info()
                                ->send();
                        }),

                    Action::make('uninstall')
                        ->label(__('plugin-manager::filament/resources/plugin.actions.uninstall.title'))
                        ->icon('heroicon-o-trash')
                        ->color('danger')
                        ->modalWidth(Width::ExtraLarge)
                        ->visible(fn ($record) => $record->is_installed)
                        ->modalHeading(__('plugin-manager::filament/resources/plugin.actions.uninstall.heading'))
                        ->modalSubmitActionLabel(__('plugin-manager::filament/resources/plugin.actions.uninstall.submit'))
                        ->modalSubmitAction(
                            fn ($action, $record) => $action->hidden(
                                collect($record->getDependentsFromConfig())
                                    ->contains(fn ($dependent) => Package::isPluginInstalled($dependent))
                            )
                        )
                        ->modalContent(function ($record) {
                            $dependents = $record->getDependentsFromConfig();

                            $installedDependents = collect($dependents)
                                ->filter(fn ($dependent) => Package::isPluginInstalled($dependent))
                                ->values();

                            $packages = collect([$record->name => $record->package])
                                ->merge(
                                    $dependents
                                        ? collect($dependents)->mapWithKeys(fn ($dep) => [$dep => Plugin::where('name', $dep)->first()?->package])
                                        : []
                                );

                            $tables = $packages
                                ->flatMap(fn ($package) => collect($package?->migrationFileNames ?? []))
                                ->map(function ($migrationFile) {
                                    if (preg_match('/create_(.*?)_table/', $migrationFile, $matches)) {
                                        $table = $matches[1];

                                        return DBSchema::hasTable($table)
                                            ? ['table' => $table, 'count' => DB::table($table)->count()]
                                            : null;
                                    }

                                    return null;
                                })
                                ->filter()
                                ->filter(fn ($item) => $item['count'] > 0)
                                ->unique('table')
                                ->values();

                            return view('plugin-manager::uninstall-modal', compact('record', 'dependents', 'installedDependents', 'tables'));
                        })
                        ->action(fn ($record) => static::uninstallPlugin($record))
                        ->after(fn () => redirect(PluginResource::getUrl('index'))),
                ]),
            ], position: RecordActionsPosition::BeforeColumns)
            ->recordActionsAlignment('end')
            ->defaultSort('sort', 'asc')
            ->paginated([16, 24, 32]);
    }

    private static function installState(Plugin $record): string
    {
        if ($record->is_installed) {
            return 'installed';
        }

        return PluginInstaller::status($record->name)['status'] ?? 'not_installed';
    }

    private static function uninstallPlugin($record)
    {
        $errors = [];

        $dependents = $record->getDependentsFromConfig();

        $installedDependents = collect($dependents)
            ->filter(fn ($dependent) => Package::isPluginInstalled($dependent))
            ->values();

        if ($installedDependents->isNotEmpty()) {
            Notification::make()
                ->title(__('plugin-manager::filament/resources/plugin.notifications.uninstalled-blocked.title'))
                ->body(__('plugin-manager::filament/resources/plugin.notifications.uninstalled-blocked.body', [
                    'name'       => $record->name,
                    'dependents' => $installedDependents->map(fn ($dependent) => ucfirst($dependent))->implode(', '),
                ]))
                ->danger()
                ->persistent()
                ->send();

            return;
        }

        collect($dependents)
            ->push($record->name)
            ->each(function ($pluginName) use (&$errors) {
                $plugin = Plugin::where('name', $pluginName)->first();

                if (! $plugin?->is_installed) {
                    return;
                }

                try {
                    if (! $plugin->package) {
                        throw new Exception("Package for '{$pluginName}' not found.");
                    }

                    $uninstallCommand = static::resolveUninstallCommand($plugin->package);

                    if ($uninstallCommand?->startWith) {
                        ($uninstallCommand->startWith)($uninstallCommand);
                    }

                    collect(array_reverse($plugin->package->migrationFileNames))
                        ->each(function ($migration) use ($plugin) {
                            $fullPath = $plugin->package->basePath("database/migrations/{$migration}.php");

                            static::downMigration($fullPath, $migration);
                        });

                    collect($plugin->package->settingFileNames)
                        ->each(function ($setting) use ($plugin) {
                            $fullPath = $plugin->package->basePath("database/settings/{$setting}.php");

                            static::downMigration($fullPath, $setting);
                        });

                    $plugin->update(['is_installed' => false, 'is_active' => false]);

                    if ($uninstallCommand?->endWith) {
                        ($uninstallCommand->endWith)($uninstallCommand);
                    }
                } catch (Throwable $e) {
                    $errors[] = "Failed to uninstall '{$pluginName}': ".$e->getMessage();
                }
            });

        Package::refreshPluginCaches();

        if (empty($errors)) {
            Notification::make()
                ->title(__('plugin-manager::filament/resources/plugin.notifications.uninstalled.title'))
                ->body(__('plugin-manager::filament/resources/plugin.notifications.uninstalled.body', ['name' => $record->name]))
                ->success()
                ->send();
        } else {
            Notification::make()
                ->title(__('plugin-manager::filament/resources/plugin.notifications.uninstalled-failed.title'))
                ->body(implode(' ', $errors))
                ->danger()
                ->persistent()
                ->send();
        }
    }

    private static function resolveUninstallCommand(Package $package): ?UninstallCommand
    {
        return collect($package->consoleCommands ?? [])
            ->first(fn ($command) => $command instanceof UninstallCommand);
    }

    private static function downMigration(string $fullPath, string $migration): void
    {
        if (! file_exists($fullPath)) {
            return;
        }

        if (! DB::table('migrations')->where('migration', $migration)->exists()) {
            return;
        }

        require_once $fullPath;

        $migrationInstance = require $fullPath;

        if (is_object($migrationInstance) && method_exists($migrationInstance, 'down')) {
            $migrationInstance->down();

            DB::table('migrations')->where('migration', $migration)->delete();
        }
    }
}
