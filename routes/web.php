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

Route::get('/', function () {
    return view('welcome');
});

Route::get('listado', 'PersonController@index');
Route::get('crear', 'PersonController@create');
Route::get('editar/{id}', 'PersonController@edit');
Route::put('actualizar/{id}', 'PersonController@update');
Route::delete('eliminar/{id}', 'PersonController@destroy');



