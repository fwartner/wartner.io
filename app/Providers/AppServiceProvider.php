<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Observers\CategoryObserver;
use App\Observers\PostObserver;
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
        Post::observe(PostObserver::class);
        Category::observe(CategoryObserver::class);
    }
}
