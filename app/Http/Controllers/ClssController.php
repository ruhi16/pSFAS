<?php

namespace App\Http\Controllers;

use App\Clss;
use App\Session;
use Illuminate\Http\Request;

class ClssController extends Controller
{  
    public function index()
    {        
        if( ! Session::where('status', 'Active')->first() ){
            return back()->with(['error' => 'Session is Not set to Active']);                
        }
        $clsss = Clss::all();        
        return view('admin.clss.index')->with('clsss', $clsss);
    }
    
    public function create()
    {
        return view('admin.clss.create');
    }

    public function store(Request $request)
    {
        $clss = new Clss;
        
        if( $clss ){
            $clss->name = $request->name;
            $clss->next_clss_id = $request->next_clss_id;
            $clss->status = $request->status;
            $clss->session_id = Session::where('status', 'Active')->first()->id;
            $clss->save();
        }
        return redirect()->route('clsss.index');
    }
    
    public function show(Clss $clsss)
    {        
        return view('admin.clss.show')
            ->with('clss', $clsss);
    }

    public function edit(Clss $clsss)
    {
        return view('admin.clss.edit')
            ->with('clss', $clsss);
    }
    
    public function update(Request $request, Clss $clsss)
    {
        $clsss->name = $request->name;
        $clsss->next_clss_id = $request->next_clss_id;
        $clsss->status = $request->status;
        $clsss->session_id = Session::where('status', 'Active')->first()->id;
        $clsss->save();
        return redirect()->route('clsss.index');
    }

    public function destroy(Clss $clsss)
    {
        $clsss->delete();
        return redirect()->route('clsss.index');
    }
}
