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

Route::get('/', function () { return redirect('dashboard/index'); });

/* Dashboard */
Route::get('dashboard', function () { return redirect('dashboard/index'); });
Route::get('dashboard/index', 'DashboardController@index')->name('dashboard.index');

/* Module */
Route::get('module', function () { return redirect('module/officers'); });
Route::resource('module/officers', 'OfficersController');
Route::resource('module/vocational', 'VocationalController');
Route::resource('module/class', 'KelasController');

