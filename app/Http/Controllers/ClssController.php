<?php

namespace App\Http\Controllers;

use App\Clss;
use Auth;
use App\Session;
use Illuminate\Http\Request;
use App\Http\Requests\ClssRequest;

class ClssController extends Controller
{
    public function index()
    {
        if (!Session::where('status', 'Active')->first()) {
            return back()->with(['error' => 'Session is Not set to Active']);
        }
        $clsss = Clss::all();
        return view('admin.clss.index')->with('clsss', $clsss);
    }

    public function create()
    {
        return view('admin.clss.create');
    }

    public function store(ClssRequest $request)
    {
        $clss = new Clss;

        if ($clss) {
            $clss->name = $request->name;
            $clss->next_clss_id = $request->next_clss_id;
            $clss->status = $request->status;
            $clss->session_id = Session::where('status', 'Active')->first()->id;
            $clss->user_id = Auth::user()->id;
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

    public function update(ClssRequest $request, Clss $clsss)
    {
        $clsss->name = $request->name;
        $clsss->next_clss_id = $request->next_clss_id;
        $clsss->status = $request->status;
        $clsss->session_id = Session::where('status', 'Active')->first()->id;        
        $clsss->user_id = Auth::user()->id;
        $clsss->save();
        return redirect()->route('clsss.index');
    }

    public function destroy(Clss $clsss)
    {
        $clsss->delete();
        return redirect()->route('clsss.index');
    }





    public function test(Request $request)
    {        
        $img = $request->image;
        
        $folderPath = "images/";

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';

        $file = $folderPath . $fileName;
        
        // dd($file);
        file_put_contents($file, $image_base64);

        // print_r($fileName);
        return back();        
    }

    
}