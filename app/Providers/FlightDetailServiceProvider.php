<?php

namespace App\Providers;

use App\Repositories\FlightDetailRepository;
use Illuminate\Support\ServiceProvider;

class FlightDetailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FlightDetailRepository::class, function ($app) {
            return new FlightDetailRepository();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    public function provides()
    {
        return [
            FlightDetailRepository::class
        ];
    }

}
