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
    return view('welcome');
});

Route::get('/places', 'IndexController@showAll');

Route::get('/places/{id}/', 'IndexController@show')->name('show')->where('id', '[0-9]+');

Route::get('/places/{id}/photos/add', 'IndexController@imgAdd');

Route::post('/places/{id}/photos/add', 'IndexController@storeImg')->name('imgStore')->where('id', '[0-9]+');

Route::get('/places/create', 'IndexController@add');

Route::post('/places/create', 'IndexController@store')->name('placeStore');
