<?php

namespace App\Providers;

use App\Services\JobService;
use App\Services\JobServiceInterface;
use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(JobServiceInterface::class, function(){
            return new JobService();
       });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Services\JobServiceInterface::class, \App\Services\JobService::class);
        //:end-bindings:
    }
}
