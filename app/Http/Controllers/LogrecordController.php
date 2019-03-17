<?php

namespace App\Http\Controllers;

use App\Logrecord;
use Illuminate\Http\Request;

class LogrecordController extends Controller
{    
    public function index()
    {
        $logrecords = Logrecord::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.logrecord.index')
            ->with('logrecords', $logrecords);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Logrecord $logrecord)
    {
        //
    }

    public function edit(Logrecord $logrecord)
    {
        //
    }

    public function update(Request $request, Logrecord $logrecord)
    {
        //
    }

    public function destroy(Logrecord $logrecord)
    {
        //
    }
}
