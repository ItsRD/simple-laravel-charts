<?php

namespace ItsRD\LaravelSimpleCharts;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VendorName\Skeleton\Commands\SkeletonCommand;

class SimpleLaravelChartsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('simple-laravel-charts')
            ->hasViews('simple-laravel-charts');
    }
}
