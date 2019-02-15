<?php

namespace App\Http\Controllers;

use App\Feeschedule;
use App\Clss;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        // echo "from Feeschedule Store method";
        // dd($request);
        $clsss = $request->clsss;
        $mnths = $request->months;
        // print_r($clsss);
        foreach($clsss as $key => $clss){            
            foreach($mnths as $mnth){               

                $feeschedule = Feeschedule::firstOrNew(['clss_id' => $clss,
                                                        'formonth_no' => $mnth,
                                                        'foryear_no'  => 2019
                                                        ]);
                $feeschedule->name = $request->name;
                $feeschedule->clss_id = $clss;
                $feeschedule->formonth_no = $mnth;
                $feeschedule->foryear_no = 2019;
                $feeschedule->total_fee = $request->total;
                $feeschedule->feestructure = $request->fees;
                $feeschedule->total_fee_discount = $request->disc;
                $feeschedule->status = $request->remarks;                
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
        // echo "I'm from edit";
        // return view('admin.feeschedule.edit')
        //     ->with('feeschedule', $feeschedule);
    }

    public function update(Request $request, Feeschedule $feeschedule)
    {
        //
    }

    public function destroy(Feeschedule $feeschedule)
    {
        //
    }
}
