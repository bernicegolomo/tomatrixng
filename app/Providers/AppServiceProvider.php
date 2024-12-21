<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\FacebookService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // app/Providers/AppServiceProvider.php



    public function register()
    {
        $this->app->singleton(FacebookService::class, function ($app) {
            return new FacebookService();
        });
    }

  
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
