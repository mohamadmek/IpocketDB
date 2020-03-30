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

Route::get('/currencies', 'CurrencyController@index');
Route::get('/currencies/{id}', 'CurrencyController@show');
Route::post('/currencies', 'CurrencyController@store');
Route::put('/currencies/update/{id}', 'CurrencyController@update');
Route::delete('/currencies/delete/{id}', 'CurrencyController@destroy');


