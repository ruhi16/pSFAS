<?php

namespace App\Http\Controllers;

use Auth;
use App\Transaction;
use App\Accountparticular;
use App\Session;
use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{    
    public function index()
    {
        $transactions = Transaction::orderBy('created_at', 'DESC')->paginate(10);
        return view ('admin.transaction.index')
            ->with('transactions', $transactions);
    }
    
    public function create()
    {
        $accountparticulars = Accountparticular::all();
        $data = [];
        foreach($accountparticulars->groupBy('acctype') as  $key => $accountparticular){            
            $d = [];
            foreach($accountparticular as $particular){              
                $d[$particular->id] = $particular->particular;
            }        
            $data[$key] = $d;             
        }

        return view('admin.transaction.create')
            ->with('accountparticulars', $accountparticulars)
            ->with('data', $data);
    }
    
    public function store(TransactionRequest $request)
    {
        $request['session_id'] = Session::where('status', 'Active')->first()->id;
        $request['user_id'] =   Auth::user()->id;
        Transaction::create($request->all());

        return redirect()->route('transactions.index');
    }
    
    public function show(Transaction $transaction)
    {
        return view('admin.transaction.show')
            ->with('transaction', $transaction);
    }
    
    public function edit(Transaction $transaction)
    {
        $accountparticulars = Accountparticular::all();
        $data = [];
        foreach($accountparticulars->groupBy('acctype') as  $key => $accountparticular){            
            $d = [];
            foreach($accountparticular as $particular){              
                $d[$particular->id] = $particular->particular;
            }        
            $data[$key] = $d;             
        }

        return view('admin.transaction.edit')
            ->with('transaction', $transaction)
            ->with('data', $data);
    }
    
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        //
    }

    public function destroy(Transaction $transaction)
    {
        //
    }
}
