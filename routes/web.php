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

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['jwt.verify']], function() {

Route::get('/user/{email}', 'UserController@show');
Route::get('/currencies', 'CurrencyController@index');
Route::get('/currencies/{id}', 'CurrencyController@show');
Route::post('/currencies', 'CurrencyController@store');
Route::put('/currencies/{id}', 'CurrencyController@update');
Route::delete('/currencies/{id}', 'CurrencyController@destroy');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{id}', 'CategoryController@show');
Route::post('/categories', 'CategoryController@store');
Route::put('/categories/{id}', 'CategoryController@update');
Route::delete('/categories/{id}', 'CategoryController@destroy');

Route::get('/transaction', 'TransactionController@index');
Route::get('/transaction2/{id}', 'TransactionController@show2');
Route::get('/transaction/{users_id}', 'TransactionController@show');
Route::post('/transaction', 'TransactionController@store');
Route::put('/transaction/{id}', 'TransactionController@update');
Route::delete('/transaction/{id}', 'TransactionController@destroy');

Route::get('/saving_goal', 'Saving_goalController@index');
Route::get('/saving_goal/{id}', 'Saving_goalController@show');
Route::post('/saving_goal', 'Saving_goalController@store');
Route::put('/saving_goal/{id}', 'Saving_goalController@update');
Route::delete('/saving_goal/{id}', 'Saving_goalController@destroy');
});



