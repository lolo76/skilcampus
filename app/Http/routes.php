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


Route::get('/', 'HomeController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('1', function () {
    return 'Je suis la page 1 !';
});

Route::get('{n}', function ($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');




Route::get('article/{n}', function ($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');
