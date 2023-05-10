<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => '/', 'as' => 'dashboard.'], function () {
    Route::get('/', 'DashboardController@index')->name('index');
    Route::get('/create', 'DashboardController@create')->name('create');
    Route::post('/store', 'DashboardController@store')->name('store');
    Route::get('/edit/{id}', 'DashboardController@edit')->name('edit');
    Route::post('/update/{id}', 'DashboardController@update')->name('update');
    Route::get('/update/{id}', 'DashboardController@update')->name('update');
});

