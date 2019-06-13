<?php

namespace App\Providers;

use App\Repositories\AirSegmentRepository;
use Illuminate\Support\ServiceProvider;

class AirSegmentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AirSegmentRepository::class, function ($app) {
            return new AirSegmentRepository();
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
            AirSegmentRepository::class
        ];
    }

}
