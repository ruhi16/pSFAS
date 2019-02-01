<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{   
    public function index() {
        $schools = School::all();
        return view('admin.school.index')
            ->with('schools', $schools);          
    }
    
    public function create(){
        return view('admin.school.create');
    }
    public function store(Request $request){
        $school = new School;
        if( $school ){
            $school->name = $request->name;
            $school->vill = $request->vill;
            $school->post = $request->post;
            $school->pstn = $request->pstn;
            $school->dist = $request->dist;
            $school->pin  = $request->pin;
            $school->dise = $request->dise;
            $school->save();
        }
        return redirect()->route('schools.index');
    }

    public function show(School $school){
        return view('admin.school.show')
            ->with('school', $school);
    }

    public function edit(School $school){
        return view('admin.school.edit')
            ->with('school', $school);
    }

    public function update(Request $request, School $school){
        $school->name = $request->name;
        $school->vill = $request->vill;
        $school->post = $request->post;
        $school->pstn = $request->pstn;
        $school->dist = $request->dist;
        $school->pin  = $request->pin;
        $school->dise = $request->dise;
        $school->save();
        return redirect()->route('schools.index');
    }
       
    public function destroy(School $school)
    {        
        $school->delete();
        return redirect()->route('schools.index');
    }
}
