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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('adminViews.welcome');
});

Route::get('/Home', 'adminController\HomeController@home')->name('pageHome')->middleware('auth');

Route::get('/allPets','adminController\PetController@all')->name('allPetsAll')->middleware('auth');

Route::get('/cadPet','adminController\PetController@add')->name('cadPetAdd')->middleware('auth');// ao nomear uma rota é possivel fazer direcionamentos, capturas...
Route::post('/cadPet','adminController\PetController@addAction');

Route::get('/editPet/{id}','adminController\PetController@edit')->name('editPetEdit')->middleware('auth');
Route::post('/editPet/{id}','adminController\PetController@editAction');

Route::get('/delPet/{id}', 'adminController\PetController@delete')->name('delPetDelete')->middleware('auth');


Route::get('allVaccines','adminController\VaccineController@all')->name('allVaccinesAll')->middleware('auth');

Route::get('/cadVaccine','adminController\VaccineController@add')->name('cadVaccineAdd')->middleware('auth');
Route::post('/cadVaccine','adminController\VaccineController@addAction');

Route::get('/editVaccine/{id}','adminController\VaccineController@edit')->name('editVaccineEdit')->middleware('auth');
Route::post('/editVaccine/{id}','adminController\VaccineController@editAction');

Route::get('delVaccine/{id}','adminController\VaccineController@delete')->name('delVaccineDelete')->middleware('auth');


Route::get('/walletPet','adminController\ListWalletPetController@list')->name('walletPetList')->middleware('auth');//exibe todos os pets e vacinas


// Route::get('allVaccines','adminController\ListVaccineController');

// Route::get('/deleta/{id}','adminController\ContatoController@deletar')->name('delContato')->middleware('auth');

// Auth::routes();

Auth::routes(['register'=>false]);

//depois da autenticação vai ser redirecionado para rota
Route::get('/home', 'HomeController@index')->name('home');
