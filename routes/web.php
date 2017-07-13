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

Route::get('/{millis}/url/{url}', 'DelayController@url')->where(['millis' => '[0-9]+', 'url' => '.+']);
Route::get('/{millis}/data/{data}', 'DelayController@data')->where(['millis' => '[0-9]+', 'data' => '.+']);
