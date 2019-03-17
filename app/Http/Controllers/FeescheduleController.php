<?php

namespace App\Http\Controllers;

use Auth;
use App\Feeschedule;
use App\Clss;
use App\Session;
use Illuminate\Http\Request;
use App\Http\Requests\FeescheduleRequest;

class FeescheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "comming soon";
        // echo "<a href= "{{ route('feeschedules.create') }}">Fee Schedule</a>";
        $feeschedules = Feeschedule::all();

        return view('admin.feeschedule.index')
            ->with('feeschedules', $feeschedules);
    }

    public function create()
    {
        $clsss = Clss::all();

        return view('admin.feeschedule.create')
            ->with('clsss', $clsss);
    }

    public function store(FeescheduleRequest $request)
    {        
        $clsss = $request->clsss;
        $mnths = $request->months;
        foreach($clsss as $key => $clss){            
            foreach($mnths as $mnth){
                $feeschedule = Feeschedule::firstOrNew(['clss_id' => $clss,
                                                        'formonth_no' => $mnth,
                                                        'foryear_no'  => $request->years
                                                        ]);
                $feeschedule->name = $request->name;
                $feeschedule->clss_id = $clss;
                $feeschedule->formonth_no = $mnth;
                $feeschedule->foryear_no = $request->years;
                $feeschedule->total_fee = $request->total;
                $feeschedule->feestructure = $request->fees;
                $feeschedule->total_fee_discount = $request->disc;
                $feeschedule->status = $request->remarks;    
                $feeschedule->session_id = Session::where('status','Active')->first()->id;                            
                $feeschedule->user_id = Auth::user()->id;
                $feeschedule->save();
            }            
        }
        return redirect()->route('feeschedules.index');
    }

    public function show(Feeschedule $feeschedule)
    {        
        
        return view('admin.feeschedule.show')
            ->with('feeschedule', $feeschedule);
    }

    public function edit(Feeschedule $feeschedule)
    {
        $clsss = Clss::all();

        return view('admin.feeschedule.edit')
            ->with('feeschedule', $feeschedule)
            ->with('clsss', $clsss);
    }

    public function update(FeescheduleRequest $request, Feeschedule $feeschedule)
    {
        $feeschedule->name = $request->name;
        $feeschedule->clss_id = $request->clsss;
        $feeschedule->formonth_no = $request->months;
        $feeschedule->foryear_no = $request->years;
        $feeschedule->total_fee = $request->total;
        $feeschedule->feestructure = $request->feestruc;
        $feeschedule->total_fee_discount = $request->disc;
        $feeschedule->status = $request->remarks;
        $feeschedule->session_id = Session::where('status','Active')->first()->id;
        $feeschedule->user_id = Auth::user()->id;
        $feeschedule->save();

        return redirect()->route('feeschedules.index');
    }

    public function destroy(Feeschedule $feeschedule)
    {
        //
    }
}
