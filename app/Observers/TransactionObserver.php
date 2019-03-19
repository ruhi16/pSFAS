<?php

namespace App\Observers;

use Auth;
use App\Session;
use App\Transaction;
use App\Logrecord;

class TransactionObserver
{
    /**
     * Handle the transaction "created" event.
     *
     * @param  \App\Transaction  $transaction
     * @return void
     */
    public function created(Transaction $transaction)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $transaction->getModelName();
        $logrecord->method_name = 'created';
        $logrecord->effected_col_id = $transaction->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the transaction "updated" event.
     *
     * @param  \App\Transaction  $transaction
     * @return void
     */
    public function updated(Transaction $transaction)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $transaction->getModelName();
        $logrecord->method_name = 'updated';
        $logrecord->effected_col_id = $transaction->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the transaction "deleted" event.
     *
     * @param  \App\Transaction  $transaction
     * @return void
     */
    public function deleted(Transaction $transaction)
    {
        $logrecord = new Logrecord;
        $logrecord->model_name = $transaction->getModelName();
        $logrecord->method_name = 'deleted';
        $logrecord->effected_col_id = $transaction->id;
        $logrecord->session_id = Session::where('status', 'Active')->first()->id;
        $logrecord->user_id = Auth::user()->id;
        $logrecord->status = "Active";
        $logrecord->remarks = "Successfully Done";        
        $logrecord->save();
    }

    /**
     * Handle the transaction "restored" event.
     *
     * @param  \App\Transaction  $transaction
     * @return void
     */
    public function restored(Transaction $transaction)
    {
        //
    }

    /**
     * Handle the transaction "force deleted" event.
     *
     * @param  \App\Transaction  $transaction
     * @return void
     */
    public function forceDeleted(Transaction $transaction)
    {
        //
    }
}
