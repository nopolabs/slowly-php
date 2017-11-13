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

Route::get('/url/{millis}/{url}', 'DelayController@urlGet')->where(['millis' => '[0-9]+', 'url' => '.+']);
Route::post('/usr/{millis}', 'DelayController@urlPost')->where(['millis' => '[0-9]+']);

Route::get('/data/{millis}/{data}', 'DelayController@dataGet')->where(['millis' => '[0-9]+', 'data' => '.+']);
Route::post('/data/{millis}', 'DelayController@dataPost')->where(['millis' => '[0-9]+']);

Route::get('/callback/{seconds}/{url}', 'DelayController@callbackGet')->where(['seconds' => '[0-9]+', 'url' => '.+']);
Route::post('/callback/{seconds}/{url}', 'DelayController@callbackPost')->where(['seconds' => '[0-9]+', 'url' => '.+']);
