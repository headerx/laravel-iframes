<?php

namespace HeaderX\Iframes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use HeaderX\Iframes\Commands\IframesCommand;

class IframesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-iframes')
            ->hasConfigFile()
            ->hasViews();
    }
}
