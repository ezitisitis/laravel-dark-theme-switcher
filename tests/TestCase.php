<?php

namespace EzitisItIs\LaravelDarkThemeSwitcher\Tests;

use EzitisItIs\LaravelDarkThemeSwitcher\LaravelDarkThemeSwitcherServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'EzitisItIs\\LaravelDarkThemeSwitcher\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDarkThemeSwitcherServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-dark-theme-switcher_table.php.stub';
        $migration->up();
        */
    }
}
