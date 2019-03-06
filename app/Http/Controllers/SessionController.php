<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::all();
        return view('admin.session.index')
            ->with('sessions', $sessions);
    }

    public function create()
    {
        // return view('session.create');    
        return view('admin.session.create');
    }

    public function store(SessionRequest $request)
    {        
        $session = new Session; 
        if( $session ){
            $session->name = $request->name;
            $session->status = "In-Active";//$request->status;
            $session->stdate = $request->stdate;
            $session->endate = $request->endate;
            $session->prevsession_id = $request->prevsession;
            $session->nextsession_id = $request->nextsession;
            $session->save();
        }
        return redirect()->route('sessions.index');
    }

    public function show(Session $session)
    {
        return view('admin.session.show')
            ->with('session', $session);
    }

    public function edit(Session $session)
    {
        return view('admin.session.edit')
            ->with('session', $session);
    }

    public function update(SessionRequest $request, Session $session)
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

    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('sessions.index');
    }


    public function setSessionActive(Session $session){
                
        Session::query()->update(['status' => 'In-Active']);

        $session->status = "Active";
        $session->save();

        return redirect()->route('sessions.index');
    }
}
