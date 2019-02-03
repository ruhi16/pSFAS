<?php

namespace App\Http\Controllers;

use App\Clsssection;
use App\Clss;
use App\Section;
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
        $section = Section::all();
        // dd($section);

        // $clsssections = Clsssection::firstOrNew(['clss_id'=> $clsss->id]);
        // dd($clsssections);
        $clsssections = Clsssection::where('clss_id', $clsss->id)->get();
        dd( $clsssections->pluck('section_id') );
        // if( $clsssections ){

            // echo $clsssections->section_id;
        // }else{
        $section = Section::orderBy('id')->first();//dd($section);
        $clsssections->clss_id = $clsss->id;
        $clsssections->section_id = $section->id;
        $clsssections->status = "Active";
        $clsssections->save();
        dd($clsssections);
        // }
        
        return redirect()->route('admin.clsssections');
    }

    public function delSection(Clss $clsss){
        dd($clsss);
        echo "Delete Class - Section";
        // return redirect()->route('admin.clsssections');
    }
}
