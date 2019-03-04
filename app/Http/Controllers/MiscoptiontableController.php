<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use DB;
use App\Session;
use App\Miscoptiontable;
use App\Http\Requests\MiscoptiontableRequest;
use Illuminate\Http\Request;


class MiscoptiontableController extends Controller
{    
    public function index()
    {        
        $miscoptiontables = Miscoptiontable::all();
        return view ('admin.miscoptiontable.index')
            ->with( 'miscoptiontables', $miscoptiontables);

    }

    public function create()
    {
        $tables = $tables = DB::select("SELECT name FROM sqlite_master 
                    WHERE type='table' AND name != 'migrations' AND name != 'password_resets'  AND name != 'sqlite_sequence'
                    ORDER BY name;");
        $tabledatas = [];
        foreach($tables   as $table) {
            $columns = Schema::getColumnListing($table->name);
            // $columns = DB::getSchemaBuilder()->getColumnListing($table->name);
            // $columns = \DB::connection()->getSchemaBuilder()->getColumnListing($table->name);            
            $tabledatas[$table->name] = $columns;
        }
        $miscoptiontables = Miscoptiontable::all();
        return view('admin.miscoptiontable.create')
            ->with('miscoptiontables', $miscoptiontables)
            ->with('tabledatas', $tabledatas);
    }

    public function store(MiscoptiontableRequest $request)
    {
        $options = explode(',', $request->options);

        foreach($options as $option){
            $miscoptiontable = MiscoptionTable::firstOrNew(['table_name' => $request->tables,
                                            'field_name' => $request->fields,
                                            'option' => $option]);
            $miscoptiontable->status='';
            $miscoptiontable->remarks= '';
            $miscoptiontable->session_id = Session::where('status','Active')->first()->id;
            $miscoptiontable->save();
        }

        return redirect()->route( 'miscoptiontables.index');
    }

    public function show(Miscoptiontable $miscoptiontable)
    {        
        return view( 'admin.miscoptiontable.show')
            ->with( 'miscoptiontable', $miscoptiontable);
    }

    public function edit(Miscoptiontable $miscoptiontable)
    {
        $tables = $tables = DB::select("SELECT name FROM sqlite_master 
                    WHERE type='table' AND name != 'migrations' AND name != 'password_resets'  AND name != 'sqlite_sequence'
                    ORDER BY name;");
        $tabledatas = [];
        foreach($tables    as $table) {
            $columns = Schema::getColumnListing($table->name);        
            $tabledatas[$table->name] = $columns;
        }
        
        
        return view('admin.miscoptiontable.edit')
            ->with( 'miscoptiontable', $miscoptiontable)
            ->with('tabledatas', $tabledatas);
    }

    public function update(MiscoptiontableRequest $request, Miscoptiontable $miscoptiontable)
    {        
        $miscoptiontable->table_name = $request->tables;
        $miscoptiontable->field_name = $request->fields;
        $miscoptiontable->option     = $request->options;
        $miscoptiontable->status     = $request->status;
        $miscoptiontable->remarks    = $request->remarks;
        $miscoptiontable->session_id = Session::where('status','Active')->first()->id;
        $miscoptiontable->save();

        return redirect()->route('miscoptiontables.index');
    }

    public function destroy(Miscoptiontable $miscoptiontable)
    {        
        $miscoptiontable->delete();
        return redirect()->route('miscoptiontables.index');
    }
}
