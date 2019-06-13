<?php

namespace App\Providers;

use App\Repositories\AirPricingSolutionRepository;
use Illuminate\Support\ServiceProvider;

class AirPricingSolutionProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AirPricingSolutionRepository::class, function ($app) {
            return new AirPricingSolutionRepository();
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
            AirPricingSolutionRepository::class
        ];
    }
}
