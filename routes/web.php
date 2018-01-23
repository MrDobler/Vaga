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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('getAll', 'PlanoDeSaudeController@getAll');
Route::get('getPlano/{id}', 'PlanoDeSaudeController@getPlano');
Route::post('createPlano', 'PlanoDeSaudeController@createPlano');
Route::put('updatePlano/{id}', 'PlanoDeSaudeController@updatePlano');
Route::delete('deletePlano/{id}', 'PlanoDeSaudeController@deletePlano');

Route::get('getAllClinicas', 'ClinicaController@getAll');
Route::get('getClinica/{id}', 'ClinicaController@getClinica');
Route::post('createClinica', 'ClinicaController@createClinica');
Route::put('updateClinica/{id}', 'ClinicaController@updateClinica');
Route::delete('deleteClinica/{id}', 'ClinicaController@deleteClinica');
