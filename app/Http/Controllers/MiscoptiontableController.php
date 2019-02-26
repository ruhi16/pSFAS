<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use DB;
use App\Miscoptiontable;
use Illuminate\Http\Request;

class MiscoptiontableController extends Controller
{    
    public function index()
    {
        $tables = $tables = DB::select( "SELECT name FROM sqlite_master 
                                WHERE type='table' AND name != 'migrations' AND name != 'password_resets'  AND name != 'sqlite_sequence'
                                ORDER BY name;");

        $tabledatas = [];
        foreach($tables  as $table) {
            // echo $table->name.": ";
            
            $columns = Schema::getColumnListing($table->name);
            // $columns = DB::getSchemaBuilder()->getColumnListing($table->name);
            // $columns = \DB::connection()->getSchemaBuilder()->getColumnListing($table->name);
            // print_r($columns);
            // foreach($columns as $column){
            //     echo $column . ', ';
            // }
            // echo "<br>";
            $tabledatas[$table->name] = $columns;
        }
        // dd($tabledata);
        $miscoptiontables = Miscoptiontable::all();
        return view ('admin.miscoptiontable.index')
            ->with('miscoptiontables', $miscoptiontables)
            ->with('tabledatas', $tabledatas);

    }

    public function create()
    {
        return view('admin.miscoptiontable.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Miscoptiontable $miscoptiontable)
    {
        //
    }

    public function edit(Miscoptiontable $miscoptiontable)
    {
        //
    }

    public function update(Request $request, Miscoptiontable $miscoptiontable)
    {
        //
    }

    public function destroy(Miscoptiontable $miscoptiontable)
    {
        //
    }
}
