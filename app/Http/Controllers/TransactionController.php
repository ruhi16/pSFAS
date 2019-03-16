<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Accountparticular;
use Illuminate\Http\Request;

class TransactionController extends Controller
{    
    public function index()
    {
        $transactions = Transaction::all();
        return view ('admin.transaction.index')
            ->with('transactions', $transactions);
    }
    
    public function create()
    {
        $accountparticulars = Accountparticular::all();

        return view('admin.transaction.create')
            ->with('accountparticulars', $accountparticulars);
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(Transaction $transaction)
    {
        //
    }
    
    public function edit(Transaction $transaction)
    {
        //
    }
    
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    public function destroy(Transaction $transaction)
    {
        //
    }
}
