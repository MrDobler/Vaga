<?php

use Illuminate\Support\Facades\Request;

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
//Rota da tela inicial do Sistema Vaga
Route::get('/', function () {
    return view('welcome');
});

//Rota de autorização para o login
Auth::routes();

//Rotas das views
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/planos', 'HomeController@planos')->name('planos');
Route::get('/clinicas', 'HomeController@clinicas')->name('clinicas');

//Rotas dos Planos de Saúde
Route::get('getAllPlanos', 'PlanoDeSaudeController@getAllPlanos');
Route::get('getPlano/{id}', 'PlanoDeSaudeController@getPlano');
Route::post('createPlano', 'PlanoDeSaudeController@createPlano');
Route::post('updatePlano/{id}', 'PlanoDeSaudeController@updatePlano');
Route::delete('deletePlano/{id}', 'PlanoDeSaudeController@deletePlano');

//Rotas das Clínicas
Route::get('getAllClinicas', 'ClinicaController@getAllClinicas');
Route::get('getClinica/{id}', 'ClinicaController@getClinica');
Route::post('createClinica', 'ClinicaController@createClinica');
Route::post('updateClinica/{id}', 'ClinicaController@updateClinica');
Route::delete('deleteClinica/{id}', 'ClinicaController@deleteClinica');

//Rotas de relacionamento PlanoXClinica
Route::get('getPlanosEmClinicas/{id}', 'PlanoClinicaController@getPlanosEmClinicas');
Route::post('createPlanosEmClinicas/plano/{plano_id}/clinica/{clinica_id}', 'PlanoClinicaController@createPlanosEmClinicas');
Route::delete('deletePlanosEmClinicas/plano/{plano_id}/clinica/{clinica_id}', 'PlanoClinicaController@deletePlanosEmClinicas');


