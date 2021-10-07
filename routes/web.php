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
    return view('adminViews.welcome');
});

Route::get('/Home', function(){
    return view('adminViews.home');
 });

Route::get('/cadastroPet','adminController\PetController@cadastrarPet')->name('realizarCadastroPet');// ao nomear uma rota é possivel fazer direcionamentos, capturas...
Route::post('/cadastroPet','adminController\PetController@cadastrarPetAction');

Route::get('/informacaoPet','adminController\InformacaoPetController@BuscaInformacao')->name('exibeDados');

Route::get('/cadastroVaccine','adminController\VaccineController@cadastrarVaccine')->name('realizarCadastroVaccine');
Route::post('/cadastroVaccine','adminController\VaccineController@cadastrarVaccineAction');