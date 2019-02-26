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

use App\Feecollection;
Route::get('/columns',function(){
    $table = new Feecollection;
    // dd($table->getTableColumns());
});

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



Route::get('/tables', function(){
    // $tables = DB::select("SELECT table_schema,table_name, table_catalog FROM information_schema.tables WHERE table_catalog = 'YOUR TABLE CATALOG HERE' AND table_type = 'BASE TABLE' AND table_schema = 'public' ORDER BY table_name;");
    $tables = $tables = DB::select("SELECT name FROM sqlite_master WHERE type='table' ORDER BY name;");
    foreach($tables as $table)
    {
        echo $table->name."<br>";
        // print_r($table);//->Tables_in_db_name;
    }
});

Route::resource('schools', 'SchoolController');

Route::get('/setSessionActive/{session}', 'SessionController@setSessionActive')->name('admin.session.setActive');
Route::resource('sessions', 'SessionController');

Route::resource('clsss', 'ClssController');
Route::resource('sections', 'SectionController');

Route::get('/index',              'ClsssectionController@index')     ->name('admin.clsssections');
Route::get('/addSection/{clsss}', 'ClsssectionController@addSection')->name('admin.addClsssections');
Route::get('/delSection/{clsss}', 'ClsssectionController@delSection')->name('admin.delClsssections');

Route::resource('studentdbs', 'StudentdbController');
Route::resource('feeschedules', 'FeescheduleController');

Route::get('/feecollections/findStudentcr', 'FeecollectionController@findStudentcr')->name('admin.feecollection.findStudentcr');
Route::get('/feecollections/studentcr', 'FeecollectionController@studentcr')->name('admin.feecollection.studentcr');

Route::get('/feedescriptions/{studentcr}/{feeschedule}', ['uses'=>'FeecollectionController@studentcrFeeDescription'])->name('admin.feecollection.description');
Route::get('/feecollections/{studentcr}/{feeschedule}',  ['uses'=>'FeecollectionController@studentcrFeeCollection'] )->name('admin.feecollection.collection');

Route::resource('feecollections', 'FeecollectionController');


Route::post('/studentcrs/{studentcr}/issueRoll', 'StudentcrController@issueRoll')->name('admin.studentcr.issueRoll');
Route::resource('studentcrs', 'StudentcrController');


Route::resource( 'miscoptiontables', 'MiscoptiontableController');