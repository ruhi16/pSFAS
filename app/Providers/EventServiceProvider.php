<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
// use Illuminate\Auth\Events\TaskEvent;
// use Illuminate\Auth\Listeners\TaskEventListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // \App\Events\TaskEvent::class => [
        //     \App\Listeners\TaskEventListeners::class,
        // ],
        
        // 'App\Events\TaskEvent' => [
        //     'App\Listeners\TaskEventListeners',
        // ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
