<?php

namespace App\Http\Controllers;

use App\Feecollection;
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
}
