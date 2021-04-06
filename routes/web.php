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

// Route::get('/', function () {return view('welcome');});

// hanya untuk tamu yg belum auth
Route::get('/login', 'AuthenticationController@login')->name('login')->middleware('guest');
Route::post('/login', 'AuthenticationController@postLogin');
Route::get('/logout', 'AuthenticationController@logout');;

/* Student Login */
Route::get('mainsite/login', 'MainLoginController@login')->name('main.site.login');
Route::post('mainsite/login', 'MainLoginController@postLogin');
Route::get('mainsite/logout', 'MainLoginController@logout');
Route::get('mainsite', 'MainSiteController@index')->name('mainsite.index');



Route::group(['middleware' => ['auth:admin']], function(){
   
    Route::get('/', function () { return redirect('dashboard/index'); });

    /* Dashboard */
    Route::get('dashboard', function () { return redirect('dashboard/index'); });
    Route::get('dashboard/index', 'DashboardController@index')->name('dashboard.index');

    /* Payment */
    Route::get('payment', function () { return redirect('payment/index'); });
    Route::get('payment/index', 'PaymentController@index')->name('payment.payment');
    Route::get('payment/autocomplete', 'PaymentController@autocomplete')->name('payment.autocomplete');
    Route::get('payment/cari', 'PaymentController@loadData')->name('payment.cari');
    Route::post('payment/search', 'PaymentController@search')->name('payment.search');
    Route::post('payment', 'PaymentController@payment')->name('payment.bayar');

    /* Payment */
    Route::get('history', function () { return redirect('history/index'); });
    Route::get('history/index', 'HistoryController@index')->name('history.history');
    Route::get('payment/detail', function () {return view('payment.payment_detail');});

    /* Module */
    Route::get('module', function () { return redirect('module/officers'); });
    Route::resource('module/officers', 'OfficersController');
    Route::resource('module/vocational', 'VocationalController');
    Route::resource('module/class', 'KelasController');
    Route::resource('module/tuition', 'TuitionController');
    Route::resource('module/students', 'StudentsController');

    /* Report */
    Route::get('report', function () { return redirect('report/index'); });
    Route::get('report/income', 'IncomeController@index')->name('report.income');
    Route::get('report/income/filter', 'IncomeController@filter')->name('report.income.filter');
    Route::get('report/classreport', 'ClassReportController@filter')->name('report.class');


    Route::get('report/latePayment', 'LatePaymentController@index')->name('report.latePayment');
    Route::get('report/latePayment/filter', 'LatePaymentController@filter')->name('report.latePayment.filter');

});

Route::group(['middleware' => ['auth:admin,student']], function(){
});

Route::group(['middleware' => ['auth:student']], function(){
});