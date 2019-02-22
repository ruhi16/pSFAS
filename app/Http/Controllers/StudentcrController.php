<?php

namespace App\Http\Controllers;

use App\Studentdb;
use App\Studentcr;
use App\Clsssection;
use App\Session;
use Illuminate\Http\Request;

class StudentcrController extends Controller
{
    public function index()
    {        
        $studentcrs = Studentcr::where('roll_no', null)->get();
        // dd($studentcrs);
        $studentdbs = Studentdb::whereNotIn('id', Studentcr::all()->pluck('studentdb_id') )->get();
        $studentcrsWithRoll = Studentcr::where('roll_no','!=', null)->get();

        $clssections = Clsssection::all();

        return view('admin.studentcr.index')
            ->with('studentdbs', $studentdbs)
            ->with('studentcrs', $studentcrs)
            ->with('studentcrsWithRoll', $studentcrsWithRoll)
            ->with('clssections', $clssections);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $studentdb = Studentdb::find($request->stddbid);

        $studentcr = Studentcr::firstOrNew(['studentdb_id'=> $request->stddbid]);
        $studentcr->studentdb_id = $studentdb->id;
        $studentcr->clss_id = $studentdb->adm_clss_id;
        $studentcr->section_id = $request->stdsection;
        $studentcr->status = "Active";
        $studentcr->session_id = Session::where('status', 'Active')->first()->id;
        $studentcr->save();

        return redirect()->route('studentcrs.index');
    }
    public function show(Studentcr $studentcr)
    {
        echo "studentcr show";
        // dd($studentcr);
        return redirect()->route('studentcrs.index');
    }

    public function edit(Studentcr $studentcr)
    {
        echo "studentcr edit";
        // dd($studentcr);
        return redirect()->route('studentcrs.index');
    }

    public function update(Request $request, Studentcr $studentcr)
    {
        return redirect()->route('studentcrs.index');
    }

    public function destroy(Studentcr $studentcr)
    {
        return redirect()->route('studentcrs.index');
    }

    public function issueRoll(Studentcr $studentcr)
    {
        echo "from studentcr issue roll";
        // dd($studentcr);
        $maxRoll = Studentcr::where('clss_id', $studentcr->clss_id)
                        ->where('section_id', $studentcr->section_id)
                        ->max('roll_no');
        // dd($maxRoll);
        if($maxRoll == null){
            $maxRoll = 1;
        }else{
            $maxRoll++;
        }
        $studentcr->roll_no = $maxRoll;
        $studentcr->save();
        return redirect()->route('studentcrs.index');
    }
}