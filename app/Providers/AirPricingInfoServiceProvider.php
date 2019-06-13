<?php

namespace App\Providers;

use App\Repositories\AirPricingInfoRepository;
use Illuminate\Support\ServiceProvider;

class AirPricingInfoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AirPricingInfoRepository::class, function ($app) {
            return new AirPricingInfoRepository();
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
            AirPricingInfoRepository::class
        ];
    }

}