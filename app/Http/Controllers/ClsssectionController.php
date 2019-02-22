<?php

namespace App\Http\Controllers;

use App\Session;
use App\Clss;
use App\Section;
use App\Clsssection;
use Illuminate\Http\Request;


class ClsssectionController extends Controller
{
    public function index(){
        $clsss = Clss::all();
        $clsssections = Clsssection::all();
        return view('admin.clsssection.index')
            ->with('clsssections', $clsssections->sortBy('section_id'))
            ->with('clsss', $clsss);
    }

    public function addSection(Clss $clsss){
        $clsssections = Clsssection::where('clss_id', $clsss->id)->get();
        
        $section = Section::whereNotIn('id', $clsssections->pluck('section_id'))->orderBy('id')->first();
        if( $section ){
            $clsssection = new Clsssection;
            $clsssection->clss_id = $clsss->id;
            $clsssection->section_id = $section->id;
            $clsssection->status = "Active";
            $clsssection->session_id = Session::where('status', 'Active')->first()->id;
            $clsssection->save();
        }
        
        return redirect()->route('admin.clsssections');
    }

    public function delSection(Clss $clsss){        
        $clsssections = Clsssection::where('clss_id', $clsss->id)->orderByDesc('section_id')->first();
        
        if( $clsssections ){
            $clsssections->delete();
        }
        return redirect()->route('admin.clsssections');
    }
}
