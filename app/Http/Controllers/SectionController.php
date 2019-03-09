<?php

namespace App\Http\Controllers;

use App\Section;
use App\Session;
use Illuminate\Http\Request;
use App\Http\Requests\SectionRequest;

class SectionController extends Controller
{    
    public function index()
    {
        if( !Session::where('status', 'Active')->first()){
             return back()->with(['error' => 'Session is Not set to Active']);                
        }
        $sections = Section::all();
        return view('admin.section.index')
            ->with('sections', $sections);
    }
    
    public function create()
    {        
        return view('admin.section.create');
    }
    
    public function store(SectionRequest $request)
    {
        // dd($request);
        $section = new Section;
        if( $section ){
            $section->name = $request->name;
            $section->status = $request->status;
            $section->session_id = Session::where('status', 'Active')->first()->id;
            $section->save();
        }
        return redirect()->route('sections.index');
    }
    
    public function show(Section $section)
    {
        return view('admin.section.show')
            ->with('section', $section);
    }

    public function edit(Section $section)
    {
        return view('admin.section.edit')
            ->with('section', $section);
    }

    public function update(SectionRequest $request, Section $section)
    {
        $section->name = $request->name;
        $section->status = $request->status;
        $section->save();
        return redirect()->route('sections.index');
    }

    public function destroy(Section $section)
    {

        $section->delete();
        return redirect()->route('sections.index');
    }
}
