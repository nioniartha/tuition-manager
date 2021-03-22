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

Route::group(['middleware' => ['auth:admin']], function(){
   
    Route::get('/', function () { return redirect('dashboard/index'); });

    /* Dashboard */
    Route::get('dashboard', function () { return redirect('dashboard/index'); });
    Route::get('dashboard/index', 'DashboardController@index')->name('dashboard.index');

    /* Payment */
    Route::get('payment', function () { return redirect('dashboard/index'); });
    Route::get('payment/index', 'PaymentController@index')->name('payment.payment');
    Route::get('payment/autocomplete', 'PaymentController@autocomplete')->name('payment.autocomplete');
    Route::get('payment/cari', 'PaymentController@loadData')->name('payment.cari');
    Route::post('payment/search', 'PaymentController@search')->name('payment.search');


    /* Module */
    Route::get('module', function () { return redirect('module/officers'); });
    Route::resource('module/officers', 'OfficersController');
    Route::resource('module/vocational', 'VocationalController');
    Route::resource('module/class', 'KelasController');
    Route::resource('module/tuition', 'TuitionController');
    Route::resource('module/students', 'StudentsController');

});

