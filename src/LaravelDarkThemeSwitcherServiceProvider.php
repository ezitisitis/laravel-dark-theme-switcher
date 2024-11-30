<?php

namespace EzitisItIs\LaravelDarkThemeSwitcher;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use EzitisItIs\LaravelDarkThemeSwitcher\Commands\LaravelDarkThemeSwitcherCommand;

class LaravelDarkThemeSwitcherServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dark-theme-switcher')
            ->hasConfigFile()
            ->hasViews('dark-theme-switcher');
    }
}
