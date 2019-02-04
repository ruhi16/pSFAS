<?php

namespace App\Http\Controllers;

use App\Feeschedule;
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
        return view('admin.feeschedule.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        echo "from Feeschedule Store method";
    }

    public function show(Feeschedule $feeschedule)
    {
        //
    }

    public function edit(Feeschedule $feeschedule)
    {
        //
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
