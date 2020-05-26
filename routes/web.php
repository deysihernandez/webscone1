<?php

use Illuminate\Support\Facades\Route;

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
// Router Auth
Route::get('login', 'connectController@getLogin')->name('login');
Route::post('login', 'connectController@postLogin')->name('login');
Route::get('register', 'connectController@getRegister')->name('register');
Route::post('register', 'connectController@postRegister')->name('register');
//Route::get('logout', 'connectController@getLogout')->name('logout');
Route::get('cupos', 'connectController@getCupos')->name('cupos');
Route::get('ficha', 'connectController@getFicha')->name('ficha');
Route::get('form', 'connectController@getForm')->name('form');
Route::get('busquedaresuelta', 'busquedaresueltaController@getBusquedaresuelta')->name('busquedaresuelta');
//Route::get('search', 'busquedaresueltaController@getSearch')->name('search');