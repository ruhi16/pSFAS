<?php

namespace App\Providers;

use App\Feecollection;
// use App\FeecollectionCreatedEvent;
use App\Observers\FeecollectionObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Feecollection::observe(FeecollectionObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
