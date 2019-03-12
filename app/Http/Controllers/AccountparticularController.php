<?php

namespace App\Http\Controllers;

use Auth;
use App\Accountparticular;
use Illuminate\Http\Request;
use App\Http\Requests\AccountparticularRequest;
use App\Session;

class AccountparticularController extends Controller
{    
    public function index()
    {
        // echo "accountparticular index";
        $accountparticulars = Accountparticular::all();
        return view('admin.accountparticular.index')
            ->with('accountparticulars', $accountparticulars);
    }

    public function create()
    {
        // echo "accountparticular create";
        return view('admin.accountparticular.create');
    }

    public function store( AccountparticularRequest $request)
    {
        
        $data = $request->all();
        $data['session_id'] = Session::where('status','Active')->first()->id;
        $data['user_id'] = Auth::user()->id;
        
        Accountparticular::create($data);
        
        return redirect()->route('accountparticulars.index');
    }

    public function show(Accountparticular $accountparticular)
    {
        // echo "accountparticular show";
        return view('admin.accountparticular.show')
            ->with('accountparticular', $accountparticular);
    }

    public function edit(Accountparticular $accountparticular)
    {
        // echo "accountparticular edit";
        return view('admin.accountparticular.edit')
            ->with('accountparticular', $accountparticular);
    }

    public function update(AccountparticularRequest $request, Accountparticular $accountparticular)
    {
        // echo "accountparticular update";
        $data = $request->all();
        $data['session_id'] = Session::where('status','Active')->first()->id;
        $data['user_id'] = Auth::user()->id;
        $accountparticular->update($data);
        
        return redirect()->route('accountparticulars.index');
    }

    public function destroy(Accountparticular $accountparticular)
    {
        // echo "accountparticular destroy";
        $accountparticular->delete();
        return redirect()->route('accountparticulars.index');
    }
}
