<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('main', 'MainController@home');

//ligamos el controlador con nuestras rutas
Route::resource('products', 'ProductsController');
/*
	GET /products => index
	POST /products => store
	GET /products/create => Formulario para crear

	GET /products/:id => Mostrar un producto con un id
	GET /products/:id/edit
	PUT/PATCH /products/:id
	DELETE /products/:id
*/