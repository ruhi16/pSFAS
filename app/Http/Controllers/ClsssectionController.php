<?php

namespace App\Http\Controllers;

use App\Clsssection;
use App\Clss;
use Illuminate\Http\Request;

class ClsssectionController extends Controller
{
    public function index(){
        $clsss = Clss::all();
        $clsssections = Clsssection::all();
        return view('admin.clsssection.index')
            ->with('clsssections', $clsssections)
            ->with('clsss', $clsss);
    }

    public function addSection(Clss $clsss){
        dd($clsss);
        echo "Add Class - Section";
        // return redirect()->route('admin.clsssections');
    }

    public function delSection(Clss $clsss){
        dd($clsss);
        echo "Delete Class - Section";
        // return redirect()->route('admin.clsssections');
    }
}
