<?php

namespace App\Providers;

use App\Repositories\AirItineraryRepository;
use Illuminate\Support\ServiceProvider;

class AirItineraryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AirItineraryRepository::class, function ($app) {
            return new AirItineraryRepository();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function provides()
    {
        return [
            AirItineraryRepository::class
        ];
    }

}
