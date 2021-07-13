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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Muthia Priyanti';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');


// Route::get('/employee', 'PegawaiController@index');
// Route::get('/employee/create', 'PegawaiController@create');
// Route::get('/employee/{employee}', 'PegawaiController@show');
// Route::post('/employee', 'PegawaiController@store');
// Route::post('/employee', 'PegawaiController@edit');
// Route::get('/employee/{employee}/edit', 'PegawaiController@edit');
// Route::patch('/employee/{employee}', 'PegawaiController@update');

Route::resource('employee', 'PegawaiController');