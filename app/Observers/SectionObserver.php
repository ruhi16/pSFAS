<?php

namespace App\Observers;

use Auth;
use App\Section;
use App\Session;
use App\Logrecord;

class SectionObserver
{
    /**
     * Handle the section "created" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function created(Section $section)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $section->getModelName();
        $logrecord->method_name = 'created';
        $logrecord->effected_col_id = $section->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the section "updated" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function updated(Section $section)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $section->getModelName();
        $logrecord->method_name = 'updated';
        $logrecord->effected_col_id = $section->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the section "deleted" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function deleted(Section $section)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $section->getModelName();
        $logrecord->method_name = 'deleted';
        $logrecord->effected_col_id = $section->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the section "restored" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function restored(Section $section)
    {
        //
    }

    /**
     * Handle the section "force deleted" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function forceDeleted(Section $section)
    {
        //
    }
}
