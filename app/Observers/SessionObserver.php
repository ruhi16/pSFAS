<?php

namespace App\Observers;

use Auth;
use App\Session;
use App\Logrecord;

class SessionObserver
{    
    public function created(Session $session)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $session->getModelName();
        $logrecord->method_name = 'created';
        $logrecord->effected_col_id = $session->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }
    
    public function updated(Session $session)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $session->getModelName();
        $logrecord->method_name = 'updated';
        $logrecord->effected_col_id = $session->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";
        $logrecord->save();
    }
    
    public function deleted(Session $session)
    {
        $logrecord = new Logrecord;        
        $logrecord->model_name = $session->getModelName();
        $logrecord->method_name = 'deleted';
        $logrecord->effected_col_id = $session->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }
    
    public function restored(Session $session){
        //
    }
    
    public function forceDeleted(Session $session){
        //
    }
}
