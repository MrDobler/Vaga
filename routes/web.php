<?php

use Illuminate\Support\Facades\Request;
use Vaga\PlanoDeSaude;
use Vaga\Clinica;

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
Route::get('/planos', 'HomeController@planos')->name('planos');
Route::get('/clinicas', 'HomeController@clinicas')->name('clinicas');

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

Route::get('getPlanosEmClinicas/{id}', 'PlanoClinicaController@getPlanosEmClinicas');
Route::post('createPlanosEmClinicas/plano/{plano_id}/clinica/{clinica_id}', 'PlanoClinicaController@createPlanosEmClinicas');

Route::post('x/plano/{plano_id}/clinica/{clinica_id}', function($plano_id, $clinica_id) {
    $plano = PlanoDeSaude::find($plano_id);
    $clinica = Clinica::find($clinica_id);
    
    $plano->clinicas()->attach($clinica);
});

