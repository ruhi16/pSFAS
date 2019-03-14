<?php

namespace App\Observers;

use Auth;
use App\School;
use App\Session;
use App\Logrecord;

class SchoolObserver
{    
    public function created(School $school)
    {        
        $logrecord = new Logrecord;        
        $logrecord->model_name = $school->getModelName();
        $logrecord->method_name = 'created';
        $logrecord->effected_col_id = $school->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }
    
    public function updated(School $school)
    {
        $logrecord = new Logrecord;        
        $logrecord->model_name = $school->getModelName();
        $logrecord->method_name = 'updated';
        $logrecord->effected_col_id = $school->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }
    
    public function deleted(School $school)
    {
        $logrecord = new Logrecord;        
        $logrecord->model_name = $school->getModelName();
        $logrecord->method_name = 'deleted';
        $logrecord->effected_col_id = $school->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }
    
    public function restored(School $school)
    {
        //
    }
    
    public function forceDeleted(School $school)
    {
        //
    }
}
