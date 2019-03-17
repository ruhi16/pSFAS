<?php

use App\Mail\WelcomeEmail;


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
use App\Session;


Auth::routes();


Route::get('/columns',function(){
    $table = new Feecollection;
    // dd($table->getTableColumns());
});

Route::get('/', function () {
    $session = Session::where('status', 'Active')->first();
    // dd(Auth::user()->email);
    // \Mail::to(Auth::user()->email)->send(new WelcomeEmail(Auth::user()));
    return view('admin.adminHome')->with('session', $session);
    // return view('admin.layouts.baselayout');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vue-app', 'HomeController@vueApp');


// MAIL_DRIVER=smtp
// MAIL_HOST=smtp.mailtrap.io
// MAIL_PORT=2525
// MAIL_USERNAME=405ae806921398
// MAIL_PASSWORD=eb44a277dc053f
// MAIL_ENCRYPTION=null

// MAIL_FROM_ADDRESS=hndas2016@gmail.com
// MAIL_FROM_NAME=HariNarayan




// MAIL_DRIVER=smtp
// MAIL_HOST=smtp.gmail.com
// MAIL_PORT=587
// MAIL_USERNAME=hndas2016@gmail.com
// MAIL_PASSWORD=ayantika80
// MAIL_ENCRYPTION=tls

// MAIL_FROM_ADDRESS=hndas2016@gmail.com
// MAIL_FROM_NAME=HariNarayan




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

Route::get('/test', function(){
    return view('test');
});
Route::post('/test', 'ClssController@test')->name('admin.clss.test');

Route::get('/tables', function(){
    // $tables = DB::select("SELECT table_schema,table_name, table_catalog FROM information_schema.tables WHERE table_catalog = 'YOUR TABLE CATALOG HERE' AND table_type = 'BASE TABLE' AND table_schema = 'public' ORDER BY table_name;");
    $tables = $tables = DB::select("SELECT name FROM sqlite_master WHERE type='table' ORDER BY name;");
    foreach($tables as $table)
    {
        echo $table->name."<br>";
        // print_r($table);//->Tables_in_db_name;
    }
});




Route::group(['middleware' => ['auth']], function () {
    Route::resource('schools', 'SchoolController');

    Route::get('/setSessionActive/{session}', 'SessionController@setSessionActive')->name('admin.session.setActive');
    Route::resource('sessions', 'SessionController');

    Route::resource('clsss', 'ClssController');
    Route::resource('sections', 'SectionController');

    Route::get('/index',              'ClsssectionController@index')     ->name('admin.clsssections');
    Route::get('/addSection/{clsss}', 'ClsssectionController@addSection')->name('admin.addClsssections');
    Route::get('/delSection/{clsss}', 'ClsssectionController@delSection')->name('admin.delClsssections');





    Route::get ('/studentdbpage01','StudentdbController@createpage01')->name('admin.studentdb.createpage01');
    Route::post('/studentdbpage01','StudentdbController@createpage01Store')->name('admin.studentdb.createpage01.store');

    Route::get ('/studentdbpage02','StudentdbController@createpage02')->name('admin.studentdb.createpage02');
    Route::post('/studentdbpage02','StudentdbController@createpage02Store')->name('admin.studentdb.createpage02.store');

    Route::get ('/studentdbpage03','StudentdbController@createpage03')->name('admin.studentdb.createpage03');
    Route::post('/studentdbpage03','StudentdbController@createpage03Store')->name('admin.studentdb.createpage03.store');


    Route::get ('/studentdbpage04','StudentdbController@createpage04')->name('admin.studentdb.createpage04');
    Route::post('/studentdbpage04','StudentdbController@createpage04Store')->name('admin.studentdb.createpage04.store');

    Route::get ('/studentdbpage05','StudentdbController@createpage05')->name('admin.studentdb.createpage05');
    Route::post('/studentdbpage05','StudentdbController@createpage05Store')->name('admin.studentdb.createpage05.store');

    Route::get ('/studentdbpage06','StudentdbController@createpage06')->name('admin.studentdb.createpage06');
    Route::post('/studentdbpage06','StudentdbController@createpage06Store')->name('admin.studentdb.createpage06.store');

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

    Route::resource('accountparticulars', 'AccountparticularController');



    Route::resource('logrecords', 'LogrecordController');


});