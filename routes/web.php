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

/*Route::get('/', function () {
    return view('lista');
});
*/

Route::get('/', 'pacientesController@getIndex');
Route::get('pacientes/{id}', 'pacientesController@getShow')->name('show');
Route::get('paciente/create', 'pacientesController@getCreate')->name('create');
Route::post('paciente/create', 'pacientesController@postCreate');
Route::get('paciente/edit/{id}', 'pacientesController@getEdit')->name('edit');
Route::put('paciente/edit/{id}', 'pacientesController@putEdit');
Route::delete('paciente/delete/{id}', 'pacientesController@deletePaciente');

Route::get('paciente/tratamiento/{id}', 'pacientesController@crearTratamiento')->name('crear');
Route::post('paciente/tratamiento/{id}', 'pacientesController@postTratamiento');
Route::delete('tratamiento/delete/{id}', 'pacientesController@deleteTratamiento');

