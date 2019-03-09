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
            'phchlng' => 'required',
            'phchlngdsc' => 'required',

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
        echo "Page 01 Data-Save Completed";        
        return view('admin.studentdb.createpage02');
    }






    public function createPage02(Request $request){

        return view('admin.studentdb.createpage02');
    }

    public function createpage02Store(Request $request){    
        
        $validatedData = $request->validate([
            'fname' => 'required',
            'foccup' => 'required',
            'fadhaar' => 'required',
            'fmobno'=> 'required',
            'mname' => 'required',
            'moccup' => 'required',
            'madhaar' => 'required',
            'mmobno'=> 'required',
            'gname' => 'required',
            'goccup' => 'required',
            'gadhaar' => 'required',
            'gmobno'=> 'required', 
            'vill' => 'required',
            'post' => 'required',
            'pols' => 'required',
            'dist' => 'required',
            'pinn' => 'required',
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
            $request->session()->put('studentdb', $studentdb);
        }
        echo "Page 02 Data-Save Completed";        
        return view('admin.studentdb.createpage03');
    }










    public function createPage03(Request $request){
     
       return view('admin.studentdb.createpage03');
    }

    public function createpage03Store(Request $request){ 
        
        $validatedData = $request->validate([
            'bankname' => 'required',
            'branch' => 'required',
            'ifsc' => 'required',
            'accno'=> 'required',
            'acctype' => 'required',            
        ]);

        if(empty($request->session()->get('studentdb'))){
            echo  "empty session";
            $studentdb = new Studentdb();
            $studentdb->fill($validatedData);
            $request->session()->put('studentdb', $studentdb);
        }else{
            echo "filled session";
            $studentdb = $request->session()->get('studentdb');
            $studentdb->fill($validatedData);
            $studentdb->session_id = Session::where('status', 'Active')->first()->id;            
            $request->session()->put('studentdb', $studentdb);
        }

        echo "Page 03  Data-Save Completed";
        return view('admin.studentdb.createpage04');
    }
















    public function createPage04(){

        return view('admin.studentdb.createpage04');
    }
    public function createpage04Store(Request $request){

        $this->validate($request, [
            'imagefile' => 'required|image|mimes:jpeg,png,gif|max:5024',
        ]);

        $image = $request->file('imagefile');

        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);


        echo "Page 04  Image-Save Completed";
        
        return redirect()->route('admin.studentdb.createpage04')
            ->with('success','You have  successfully upload image.')
            ->with('image', $new_name );
        // return response()->file(storage_path(''));
    }









    public function createPage05(){

        return view('admin.studentdb.createpage05');
    }
    public function createpage05Store(Request $request){

        echo "Page 05 Data-Save Completed";
        return view('admin.studentdb.createpage06');
    }







    public function createPage06(){

        return view('admin.studentdb.createpage06');
    }
    public function createpage06Store(Request $request){
        $validatedData = $request->validate([
            
        ]);

        if(empty($request->session()->get('studentdb'))){
             echo  "empty session";
            $studentdb = new Studentdb();
            $studentdb->fill($validatedData);
            $request->session()->put('studentdb', $studentdb);
        }else{
              echo "filled session";
            $studentdb = $request->session()->get('studentdb');
            $studentdb->fill($validatedData);
            $studentdb->session_id = Session::where('status', 'Active')->first()->id;
            $studentdb->save();
            $request->session()->forget('studentdb');
        }
        echo "Page 06  Data-Save & Finalize Completed";
        return redirect()->route('studentdbs.index');
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
