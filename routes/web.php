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

Route::get('/cadastro','adminController\CadastroController@cadastrar')->name('realizarCadastro');// ao nomear uma rota é possivel fazer direcionamentos, capturas...
Route::post('/cadastro','adminController\CadastroController@cadastrarAcao');

Route::get('/informacaoPet','adminController\InformacaoPetController@BuscaInformacao')->name('exibeDados');