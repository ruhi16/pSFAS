<?php

namespace App\Observers;

use Auth;
use App\Session;
use App\Feeschedule;
use App\Logrecord;

class FeescheduleObserver
{
    /**
     * Handle the feeschedule "created" event.
     *
     * @param  \App\Feeschedule  $feeschedule
     * @return void
     */
    public function created(Feeschedule $feeschedule)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $feeschedule->getModelName();
        $logrecord->method_name = 'created';
        $logrecord->effected_col_id = $feeschedule->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the feeschedule "updated" event.
     *
     * @param  \App\Feeschedule  $feeschedule
     * @return void
     */
    public function updated(Feeschedule $feeschedule)
    {        
        $logrecord = new Logrecord;
        $logrecord->model_name = $feeschedule->getModelName();
        $logrecord->method_name = 'updated';
        $logrecord->effected_col_id = $feeschedule->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";
        // dd($logrecord);
        $logrecord->save();
    }

    /**
     * Handle the feeschedule "deleted" event.
     *
     * @param  \App\Feeschedule  $feeschedule
     * @return void
     */
    public function deleted(Feeschedule $feeschedule)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $feeschedule->getModelName();
        $logrecord->method_name = 'deleted';
        $logrecord->effected_col_id = $feeschedule->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the feeschedule "restored" event.
     *
     * @param  \App\Feeschedule  $feeschedule
     * @return void
     */
    public function restored(Feeschedule $feeschedule)
    {
        //
    }

    /**
     * Handle the feeschedule "force deleted" event.
     *
     * @param  \App\Feeschedule  $feeschedule
     * @return void
     */
    public function forceDeleted(Feeschedule $feeschedule)
    {
        //
    }
}
