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

Route::get('/Home', 'adminController\HomeController@home')->name('pageHome');

Route::get('/allPets','adminController\PetController@all')->name('allPetsAll');

Route::get('/cadPet','adminController\PetController@add')->name('cadPetAdd');// ao nomear uma rota é possivel fazer direcionamentos, capturas...
Route::post('/cadPet','adminController\PetController@addAction');

Route::get('/editPet/{id}','adminController\PetController@edit')->name('editPetEdit');
Route::post('/editPet/{id}','adminController\PetController@editAction');

Route::get('/delPet/{id}', 'adminController\PetController@delete')->name('delPetDelete');


Route::get('allVaccines','adminController\VaccineController@all')->name('allVaccinesAll');

Route::get('/cadVaccine','adminController\VaccineController@add')->name('cadVaccineAdd');
Route::post('/cadVaccine','adminController\VaccineController@addAction');

Route::get('/editVaccine/{id}','adminController\VaccineController@edit')->name('editVaccineEdit');
Route::post('/editVaccine/{id}','adminController\VaccineController@editAction');

Route::get('delVaccine/{id}','adminController\VaccineController@delete')->name('delVaccineDelete');





Route::get('/walletPet','adminController\ListWalletPetController@list')->name('walletPetList');//exibe todos os pets e vacinas





// Route::get('allVaccines','adminController\ListVaccineController');

// Route::get('/deleta/{id}','adminController\ContatoController@deletar')->name('delContato')->middleware('auth');
