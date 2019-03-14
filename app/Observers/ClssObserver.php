<?php

namespace App\Observers;

use Auth;
use App\Clss;
use App\Session;
use App\Logrecord;

class ClssObserver
{
    /**
     * Handle the clss "created" event.
     *
     * @param  \App\Clss  $clss
     * @return void
     */
    public function created(Clss $clss)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $clss->getModelName();
        $logrecord->method_name = 'created';
        $logrecord->effected_col_id = $clss->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the clss "updated" event.
     *
     * @param  \App\Clss  $clss
     * @return void
     */
    public function updated(Clss $clss)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $clss->getModelName();
        $logrecord->method_name = 'updated';
        $logrecord->effected_col_id = $clss->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the clss "deleted" event.
     *
     * @param  \App\Clss  $clss
     * @return void
     */
    public function deleted(Clss $clss)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $clss->getModelName();
        $logrecord->method_name = 'deleted';
        $logrecord->effected_col_id = $clss->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the clss "restored" event.
     *
     * @param  \App\Clss  $clss
     * @return void
     */
    public function restored(Clss $clss)
    {
        //
    }

    /**
     * Handle the clss "force deleted" event.
     *
     * @param  \App\Clss  $clss
     * @return void
     */
    public function forceDeleted(Clss $clss)
    {
        //
    }
}
