<?php

namespace App\Http\Controllers;

use App\Clss;
use App\Studentdb;
use App\Session;
use Illuminate\Http\Request;

class StudentdbController extends Controller
{
    
    public function index()
    {
        $studentdbs = Studentdb::all();
        return view('admin.studentdb.index')
            ->with('studentdbs', $studentdbs);
    }

    
    public function create()
    {
        $clsss = Clss::all();
        return view('admin.studentdb.create')
            ->with('clsss', $clsss);
    }

    
    public function store(Request $request)
    {
        $studentdb = new Studentdb;
        $studentdb->name = $request->name;
        $studentdb->fname = $request->fname;
        $studentdb->adm_clss_id = $request->clss;
        $studentdb->status = $request->status;
        $studentdb->session_id = Session::where('status','Active')->first()->id;
        $studentdb->save();

        return redirect()->route('studentdbs.index');
    }

    
    public function show(Studentdb $studentdb)
    {
        return view('admin.studentdb.show')
            ->with('studentdb', $studentdb);
    }

    
    public function edit(Studentdb $studentdb)
    {
        $clsss = Clss::all();
        return view('admin.studentdb.edit')
            ->with('studentdb', $studentdb)
            ->with('clsss', $clsss);
    }

    
    public function update(Request $request, Studentdb $studentdb)
    {
        // dd($studentdb);
        $studentdb->name = $request->name;
        $studentdb->fname = $request->fname;
        $studentdb->adm_clss_id = $request->clss;
        $studentdb->status = $request->status;
        $studentdb->save();

        return redirect()->route('studentdbs.index');
    }

    
    public function destroy(Studentdb $studentdb)
    {
        //
    }
}
