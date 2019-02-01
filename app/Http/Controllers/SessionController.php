<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::all();
        return view('admin.session.index')
            ->with('sessions', $sessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('session.create');    
        return view('admin.session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $session = new Session;
        if( $session ){
            $session->name = $request->name;
            $session->status = $request->status;
            $session->stdate = $request->stdate;
            $session->endate = $request->endate;
            $session->prevsession_id = $request->prevsession;
            $session->nextsession_id = $request->nextsession;
            $session->save();
        }
        return redirect()->route('sessions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function show(Session $session)
    {
        return view('admin.session.show')
            ->with('session', $session);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(Session $session)
    {
        return view('admin.session.edit')
            ->with('session', $session);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Session $session)
    {
        $session->name = $request->name;
        $session->status = $request->status;
        $session->stdate = $request->stdate;
        $session->endate = $request->endate;
        $session->prevsession_id = $request->prevsession;
        $session->nextsession_id = $request->nextsession;
        $session->save();
        return redirect()->route('sessions.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('sessions.index');
    }
}
