<?php

namespace App\Http\Controllers;

use Auth;

use App\Session;
use App\Studentcr;
use App\Feeschedule;
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
        // echo "from Feecollection\Create";
        // dd($studentcr);
        // return view('admin.feecollection.create');            
    }

    public function store(Request $request)
    {
        dd($request);
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
        $studentcrs = Studentcr::orderBy('clss_id')->orderBy('section_id')->orderBy('roll_no')->get();
        return view('admin.feecollection.findstudentcr')
            ->with('studentcrs', $studentcrs);
    }

    public function studentcr(Request $request)
    {
        $studentcr   = Studentcr::find($request->studentcr_id);

        if($studentcr == null){
            $request->session()->put('error','Wrong choice!!!, Enter Correct StudentCr_Id.');
            return back();
        }

        $feeschedule = Feeschedule::where('clss_id', $studentcr->clss_id)->get();
        
        $stdcrFeeCollection = Feecollection::where('studentcr_id', $studentcr->id)->get();

        return view('admin.feecollection.feedetailsstudentcr')
            ->with('studentcr', $studentcr)
            ->with('feeschedule', $feeschedule)
            ->with('stdcrFeeCollection', $stdcrFeeCollection)
            ;
    }

    public function studentcrFeeDescription(Studentcr $studentcr, Feeschedule $feeschedule){
        // echo "hello";
        // dd($feeschedule);
        return view('admin.feecollection.feedescriptionstudentcr')
            ->with('studentcr', $studentcr)
            ->with('feeschedule', $feeschedule);            
    }

    public function studentcrFeeCollection(Studentcr $studentcr, Feeschedule $feeschedule)
    {
        // dd($feeschedule);
        $feecollection = Feecollection::firstOrNew(['studentcr_id'  => $studentcr->id, 
                                                    'feeschedule_id'=> $feeschedule->id ]);
        $feecollection->studentcr_id    = $studentcr->id;
        $feecollection->feeschedule_id  = $feeschedule->id;
        $feecollection->formonth_no     = $feeschedule->formonth_no;
        $feecollection->foryear_no      = $feeschedule->foryear_no;
        $feecollection->fee_received    = $feeschedule->total_fee;
        $feecollection->fee_pending     = 0;//$feeschedule->total_fee;
        $feecollection->fee_discount    = $feeschedule->total_fee_discount;
        $feecollection->status          = $feeschedule->status;
        $feecollection->session_id = Session::where('status', 'Active')->first()->id;
        $feecollection->user_id = Auth::user()->id;
        $feecollection->save();
        // $request = new \Illuminate\Http\Request();
        // $request->replace(['studentcr_id' => $studentcr->id]);
        // dd($request);
        return redirect()->route('admin.feecollection.studentcr', ['studentcr_id' => $studentcr->id]);
        // return redirect()->route('admin.feecollection.findStudentcr');
    }
}
