<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HelloController;
// use App\Http\Controllers\WeatherController;

// Route::get('/weather', [WeatherController::class, 'getWeather']);

Route::get('/index', 'App\Http\Controllers\HelloController@index');

Route::get('/weather', 'App\Http\Controllers\WeatherController@getWeather');

Route::get('/form', 'App\Http\Controllers\WeatherControllerWeatherController@index'); //テスト追加中


// Route::get('/', 'FormController@index');



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/showView', 'App\Http\Controllers\showViewController@index');
