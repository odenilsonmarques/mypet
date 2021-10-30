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

Route::get('/cadPet','adminController\PetController@add')->name('cadPetAdd');// ao nomear uma rota é possivel fazer direcionamentos, capturas...
Route::post('/cadPet','adminController\PetController@addAction');

Route::get('/walletPet','adminController\ListPetController@list')->name('walletPetList');

Route::get('/cadVaccine','adminController\VaccineController@add')->name('cadVaccineAdd');
Route::post('/cadVaccine','adminController\VaccineController@addAction');


Route::get('/allPets','adminController\ListPetController@all')->name('allPetsAll');
