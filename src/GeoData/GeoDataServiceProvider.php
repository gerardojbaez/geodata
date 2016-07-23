<?php

namespace Gerardojbaez\GeoData;

use Illuminate\Support\ServiceProvider;

class GeoDataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../database/seeds/AllCountriesSeeder.php' => database_path('seeds/AllCountriesSeeder.php')
        ], 'seeds');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
