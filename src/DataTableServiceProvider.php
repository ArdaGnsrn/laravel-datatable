<?php

namespace ArdaGnsrn\DataTable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ArdaGnsrn\DataTable\Commands\DataTableCommand;

class DataTableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-datatable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_datatable_table')
            ->hasCommand(DataTableCommand::class);
    }
}
