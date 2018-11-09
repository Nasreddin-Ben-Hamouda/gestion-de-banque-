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

Route::get('/', 'PagesController@index')->name('in');
Route::get('/about', 'PagesController@about')->name('ab');
Route::get('/services', 'PagesController@services')->name('se');
Route::resource('/clients', 'ClientsController');

//Route::post('/clients', 'ClientsController@store');
Route::get('/comptes/debit', 'ComptesController@debit');
Route::get('/comptes/credite', 'ComptesController@credite');
Route::get('/comptes/versement', 'ComptesController@versement');
Route::get('/clients/{id}', 'ClientsController@show');
Route::resource('/comptes', 'ComptesController');
Route::POST('/comptes/credite', 'ComptesController@criditer');
Route::POST('/comptes/debit', 'ComptesController@debiter');
Route::POST('/comptes/versement', 'ComptesController@versement1');

//Route::resource('/client','ClientsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
