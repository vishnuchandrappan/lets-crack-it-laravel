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

Route::group([], function () {
    Route::get('/', 'AppController@index');
    Route::get('/signup', 'UserController@create');

    Route::get('/login', 'AuthController@create');
    Route::post('/login', 'AuthController@login');
    Route::post('/logout', 'AuthController@logout');
    Route::get('/logout', 'AuthController@logout');

    Route::get('/profile', 'UserController@me');
});

Route::group(['prefix' => 'users'], function () {
    Route::post('/', 'UserController@store');
});
