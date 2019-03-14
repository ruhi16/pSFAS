<?php

namespace App\Providers;

use App\Feecollection;
use App\Observers\FeecollectionObserver;
// use App\FeecollectionCreatedEvent;

use App\School;
use App\Observers\SchoolObserver;

use App\Session;
use App\Observers\SessionObserver;

use App\Clss;
use App\Observers\ClssObserver;

use App\Section;
use App\Observers\SectionObserver;




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
        School::observe (SchoolObserver::class);
        Session::observe(SessionObserver::class);
        Clss::observe(ClssObserver::class);
        Section::observe(SectionObserver::class);


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
