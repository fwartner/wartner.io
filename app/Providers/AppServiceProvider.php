<?php

namespace App\Providers;

use Fwartner\LaravelAutoHelpers\LaravelAutoHelpers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        LaravelAutoHelpers::boot();
    }
}
