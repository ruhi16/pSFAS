<?php

namespace App\Http\Controllers;

use App\Clss;
use Illuminate\Http\Request;

class ClssController extends Controller
{  
    public function index()
    {
        $clsss = Clss::all();
        return view('admin.clss.index')
            ->with('clsss', $clsss);
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
            $clss->save();
        }
        return redirect()->route('clsss.index');
    }
    
    public function show($clss_id)
    {
        $clss = Clss::find($clss_id);
        
        return view('admin.clss.show')
            ->with('clss', $clss);
    }

    public function edit($clss_id)
    {
        $clss = Clss::find($clss_id);

        return view('admin.clss.edit')
            ->with('clss', $clss);
    }
    
    public function update(Request $request, $clss_id)
    {
        $clss = Clss::find($clss_id);
        $clss->name = $request->name;
        $clss->next_clss_id = $request->next_clss_id;
        $clss->status = $request->status;
        $clss->save();
        return redirect()->route('clsss.index');
    }

    public function destroy($clss_id)
    {
        $clss = Clss::find($clss_id);
        $clss->delete();
        return redirect()->route('clsss.index');
    }
}
