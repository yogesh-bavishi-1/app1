<?php

use  App\Http\Controllers\AddStudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add','StudentController@index')->name('add');
Route::post('/add','StudentController@store');


Route::get('/delete/{id}','DeleteController@index')->name('delete');//for confirmation
Route::post('/delete/{id}','DeleteController@remove');//actual deletion

Route::get('/edit/{id}','EditController@index')->name('edit');
Route::post('/edit/{id}','EditController@update');
