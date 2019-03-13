<?php

namespace App\Observers;

use Auth;
use App\Feecollection;
use App\Logrecord;
use App\Session;

class FeecollectionObserver
{
    public function created(Feecollection $feecollection){
        // dd("new feecollection record inserted");
        $logrecord = new Logrecord;
        
        $logrecord->model_name = $feecollection->getModelName();
        $logrecord->method_name = 'created';
        $logrecord->effected_col_id = $feecollection->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";
        
        $logrecord->save();
    }
}