<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.adminHome');
    // return view('admin.layouts.baselayout');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', function(){
    $stdcr = App\Studentcr::find(4);
    echo $stdcr->clss_id.'<br>';

    $now = new \DateTime('now');
    $month_no = (int) $now->format('m');
    $feesch = App\Feeschedule::where('clss_id', $stdcr->clss_id)
                        ->where('month_no', $month_no)->get();

    foreach($feesch as $fsch){
        echo $fsch->total_fee;
    }
});

Route::resource('schools', 'SchoolController');