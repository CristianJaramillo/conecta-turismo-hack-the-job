<?php

namespace App\Providers;

use App\Repositories\AirPricingGroupRepository;
use Illuminate\Support\ServiceProvider;

class AirPricingGroupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AirPricingGroupRepository::class, function ($app) {
            return new AirPricingGroupRepository();
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
            AirPricingGroupRepository::class
        ];
    }

}
