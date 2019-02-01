<?php

namespace App\Http\Controllers;

use App\Clssections;
use Illuminate\Http\Request;

class ClsssectionController extends Controller
{
    public function index(){
        $clsssections = Clssection::all();
        return view('admin.clsssection.index')
            ->with('clsssections', $clsssections);
    }

    public function addSection(Clss $clss){

        return redirect()->route('admin.clsssections');
    }

    public function delSection(Clss $clss){
        
        return redirect()->route('admin.clsssections');
    }
}
