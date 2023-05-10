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

Route::get('/', 'WebController@index')->name('index');
Route::get('/create', 'WebController@create')->name('create');
Route::post('/create', 'WebController@store')->name('store');
Route::get('/edit/{id}', 'WebController@edit')->name('edit');
Route::post('/edit/{id}', 'WebController@update')->name('update');
Route::get('/delete/{id}', 'WebController@destroy')->name('destroy');
