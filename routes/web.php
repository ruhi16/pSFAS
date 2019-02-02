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

Route::get('/vue-app', 'HomeController@vueApp');

// Route::get('/test', function(){
//     $stdcr = App\Studentcr::find(20);
//     echo "studentcr_id: ". $stdcr->id.'<br>';
//     echo "class_id: ". $stdcr->clss_id.'<br>';

//     $now = new DateTime('now');
//     $month_no = (int) $now->format('m');
    
//     $feecol = App\Feecollection::where('studentcr_id', $stdcr->id)
//                         ->where('month_no','<=',$month_no)
//                         ->get();
    
//     $feesch = App\Feeschedule::where('clss_id', $stdcr->clss_id)
//                         ->where('month_no','<=', $month_no)
//                         ->whereNotIn('id', $feecol->pluck('feeschedule_id'))
//                         ->get();

//     // dd($feesch);
//     if($feesch){
//         foreach($feesch as $fsch){
//             echo "<pre>";
//             echo "Pending: ". $fsch->total_fee ."(".$fsch->id .")". ", Month:(".$fsch->month_no .")";
//             // print_r($fsch);
//             echo "</pre>";
//         }
//     }

//     foreach($feecol as $fcol){
//         echo "<pre>";
//         echo "Paid: ". $fcol->fee_received."(".$fcol->feeschedule_id .")". ", Month:(".$fsch->month_no .")";
//         echo "</pre>";
//     }


// });

Route::resource('schools', 'SchoolController');
Route::resource('sessions', 'SessionController');
Route::resource('clsss', 'ClssController');
Route::resource('sections', 'SectionController');

Route::get('/index', 'ClsssectionController@index')->name('admin.clsssections');
Route::get('/addSection/{clsss}', 'ClsssectionController@addSection')->name('admin.addClsssections');
Route::get('/delSection/{clsss}', 'ClsssectionController@delSection')->name('admin.delClsssections');