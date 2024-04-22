<?php

namespace ItsRD\SimpleLaravelCharts;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimpleLaravelChartsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('simple-laravel-charts')
            ->hasViews('simple-laravel-charts');
    }
}
