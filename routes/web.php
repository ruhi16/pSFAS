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



// $pdf = App::make('dompdf.wrapper');
// $pdf->loadHTML('<h1>Test</h1>');
// return $pdf->stream();
// Or use the facade:

// $pdf = PDF::loadView('pdf.invoice', $data);
// return $pdf->download('invoice.pdf');
// You can chain the methods:

// return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
// You can change the orientation and paper size, and hide or show errors (by default, errors are shown when debug is on)

// PDF::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')
// If you need the output as a string, you can get the rendered PDF with the output() function, so you can save/output it yourself.

// Use php artisan vendor:publish to create a config file located at config/dompdf.php which will allow you to define local configurations to change some settings (default paper etc). You can also use your ConfigProvider to set certain keys.

// Configuration
// The defaults configuration settings are set in config/dompdf.php. Copy this file to your own config directory to modify the values. You can publish the config using this command:

// php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"
// You can still alter the dompdf options in your code before generating the pdf using this command:

// PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
// Available options and their defaults:

// rootDir: "{app_directory}/vendor/dompdf/dompdf"
// tempDir: "/tmp" (available in config/dompdf.php)
// fontDir: "{app_directory}/storage/fonts/" (available in config/dompdf.php)
// fontCache: "{app_directory}/storage/fonts/" (available in config/dompdf.php)
// chroot: "{app_directory}" (available in config/dompdf.php)
// logOutputFile: "/tmp/log.htm"
// defaultMediaType: "screen" (available in config/dompdf.php)
// defaultPaperSize: "a4" (available in config/dompdf.php)
// defaultFont: "serif" (available in config/dompdf.php)
// dpi: 96 (available in config/dompdf.php)
// fontHeightRatio: 1.1 (available in config/dompdf.php)
// isPhpEnabled: false (available in config/dompdf.php)
// isRemoteEnabled: true (available in config/dompdf.php)
// isJavascriptEnabled: true (available in config/dompdf.php)
// isHtml5ParserEnabled: false (available in config/dompdf.php)
// isFontSubsettingEnabled: false (available in config/dompdf.php)
// debugPng: false
// debugKeepTemp: false
// debugCss: false
// debugLayout: false
// debugLayoutLines: true
// debugLayoutBlocks: true
// debugLayoutInline: true
// debugLayoutPaddingBox: true
// pdfBackend: "CPDF" (available in config/dompdf.php)
// pdflibLicense: ""
// adminUsername: "user"
// adminPassword: "password"
// Tip: UTF-8 support
// In your templates, set the UTF-8 Metatag:

// <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
// Tip: Page breaks
// You can use the CSS page-break-before/page-break-after properties to create a new page.

// <style>
// .page-break {
//     page-break-after: always;
// }
// </style>
// <h1>Page 1</h1>
// <div class="page-break"></div>
// <h1>Page 2</h1>