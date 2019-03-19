<?php

namespace App\Providers;

use App\School;
use App\Observers\SchoolObserver;

use App\Session;
use App\Observers\SessionObserver;

use App\Clss;
use App\Observers\ClssObserver;

use App\Section;
use App\Observers\SectionObserver;

use App\Transaction;
use App\Observers\TransactionObserver;

use App\Feecollection;
use App\Observers\FeecollectionObserver;
// use App\FeecollectionCreatedEvent;

use App\Feeschedule;
use App\Observers\FeescheduleObserver;






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




        
        Feeschedule::observe(FeescheduleObserver::class);
        Feecollection::observe(FeecollectionObserver::class);
        Transaction::observe(TransactionObserver::class);
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
