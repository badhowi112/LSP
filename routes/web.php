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

Route::get('/','MobilController@index');
Route::get('/rental','PenyewaanController@index');
Route::post('/rental/add','PenyewaanController@store');
Route::post('/mobil/create','MobilController@store');
Route::get('/mobil/{id}/edit','MobilController@edit');
Route::post('/mobil/{id}/update','MobilController@update');
Route::get('/mobil/{id}/delete','MobilController@destroy');

