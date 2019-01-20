<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('school.index')
            ->with('schools', $schools);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
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
        // dd($request);
        // echo "Name:".$request->name."<br>";
        return redirect()->route('schools.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        // return 'I am from school show '. $school->name;
        return view('school.show')
            ->with('school', $school);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        // dd($school);
        // echo $school->name;
        return view('school.edit')
            ->with('school', $school);
        // return 'I am from school edit '. $school->name;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request   (new data)
     * @param  \App\School  $school                 (old data)
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school->name = $request->name;
        $school->vill = $request->vill;
        $school->post = $request->post;
        $school->pstn = $request->pstn;
        $school->dist = $request->dist;
        $school->pin  = $request->pin;
        $school->dise = $request->dise;
        $school->save();
        return redirect()->route('schools.index');
        // dd($school);
        // return "updateed";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        
        $school->delete();
        // return 'I am from school destroy '. $school->name;
        return redirect()->route('schools.index');
    }
}
