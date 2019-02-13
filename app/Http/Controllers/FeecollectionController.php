<?php

namespace App\Http\Controllers;

use App\Feecollection;
use App\Feeschedule;
use App\Studentcr;
use Illuminate\Http\Request;

class FeecollectionController extends Controller
{
    public function index()
    {
        $feecollections = Feecollection::all();
        return view('admin.feecollection.index')
            ->with('feecollections', $feecollections);
    }
    
    public function create()
    {
        return view('admin.feecollection.create');            
    }

    public function store(Request $request)
    {
        return "from store page";
    }

    public function show(Feecollection $feecollection)
    {        
        return view('admin.feecollection.show')
            ->with('feecollection', $feecollection);
    }

    public function edit(Feecollection $feecollection)
    {
        //
    }

    public function update(Request $request, Feecollection $feecollection)
    {
        //
    }

    public function destroy(Feecollection $feecollection)
    {
        //
    }

    //Customize Functions...
    public function findStudentcr()
    {
        
        return view('admin.feecollection.findstudentcr');
    }

    public function studentcr(Request $request)
    {
        $studentcr = Studentcr::find($request->studentcr_id);
        $feeschedule = Feeschedule::where('clss_id', $studentcr->id)->get();
        
        $stdcrFeeCollection = Feecollection::where('studentcr_id', $studentcr->id)->get();
        // dd($stdcrFeeCollection);

        return view('admin.feecollection.feedetailsstudentcr')
            ->with('studentcr', $studentcr)
            ->with('feeschedule', $feeschedule)
            ->with('stdcrFeeCollection', $stdcrFeeCollection)
            ;
    }
}
