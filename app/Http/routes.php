<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('index');
});


Route::resource('noticias', 'Noticias');
// Route::post('/api/v1/noticias', 'Noticias@store');
// Route::post('/api/v1/noticias/{id}', 'Noticias@update');
// Route::delete('/api/v1/noticias/{id}', 'Noticias@destroy');