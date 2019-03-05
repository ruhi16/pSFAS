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
        if( !Session::where('status', 'Active')->first() ){
             return back()->with(['error' => 'Session is Not set to Active']);                
        }
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




    public function createPage01(){
        $clsss = Clss::all();

        return view('admin.studentdb.createpage01')
            ->with('clsss', $clsss);
    }
    public function createpage01Store(Request $request){
        
        $validatedData = $request->validate([
            'admbkno'=> 'required',
            'admslno'=> 'required',
            'admdate'=> 'required', 
            'name' => 'required',
            'dobirth'=> 'required',             
            'gender' => 'required',
            'adm_clss_id'=> 'required',
            'adhaar' => 'required',
            'adm_clss_id'=> 'required',
            'nation' => 'required',
        ]);

        if(empty($request->session()->get('studentdb'))){            
            $studentdb = new Studentdb();
            $studentdb->fill($validatedData);
            $request->session()->put('studentdb', $studentdb);             
        }else{            
            $studentdb = $request->session()->get('studentdb');
            $studentdb->fill($validatedData);
            $request->session()->put('studentdb', $studentdb);             
        }
        echo "Page 01 Completed";        
        return view('admin.studentdb.createpage02');
    }






    public function createPage02(Request $request){

        return view('admin.studentdb.createpage02');
    }

    public function createpage02Store(Request $request){
    
        echo "createpage 02 store";
        $validatedData = $request->validate([
            'vill' => 'required',
            'post' => 'required',
            'pols' => 'required',
            'dist' => 'required',
        ]);
        if( empty($request->session()->get('studentdb')) ){
            echo "empty session";
            $studentdb = new Studentdb();
            $studentdb->fill($validatedData);
            $request->session()->put('studentdb', $studentdb);
        }else{
            echo "filled session";
            $studentdb = $request->session()->get('studentdb');
            $studentdb->fill($validatedData);
            $studentdb->session_id = Session::where('status', 'Active')->first()->id;
            $studentdb->save();
            $request->session()->put('studentdb', $studentdb);
        }
        echo "Page 01 Completed";
        // dd($request);
        //return view('admin.studentdb.createpage02');
    }










    public function createPage03(){

        return view('admin.studentdb.createpage03');
    }
    public function createPage04(){

        return view('admin.studentdb.createpage04');
    }











    public function createPage05(){

        return view('admin.studentdb.createpage05');
    }
    







    public function createPage06(){

        return view('admin.studentdb.createpage06');
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
