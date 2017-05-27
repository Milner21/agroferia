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

Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/admin', function () {
    return view('admin.principal');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'SitioController@index');

Route::get('/productos', 'SitioController@productos');

Route::get('/login', 'SitioController@login');

Route::get('/contacto', 'SitioController@contacto');

Route::get('/acerca', 'SitioController@acerca');

