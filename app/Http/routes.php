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

/* Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]); */

/* CRUD

Route::get('guardar', 'PlanetController@guardar');

Route::get('leer', 'PlanetController@leer');

Route::get('actualizar', 'PlanetController@actualizar');

Route::get('eliminar', 'PlanetController@eliminar');

FIN CRUD */

/*FILTRO

Route::get('filtrar/{num}', ['middleware' => 'filtrohulk', 'uses' => 'HulkController@ver']);

FIN FILTRO */

/* HELPER PERSONALIZADO

Route::get('ayudador', 'AyudadorController@vista');

FIN HELPER */

/* FORMULARIO

Route::get('formulario', function() {

	return view('formulario');

});

Route::post('imprimir', 'FormController@imprimir');

FIN FORMULARIO */

/* MANEJO DE VISTAS

Route::get('primero', function() {

	return view('primer_estilo');

});

Route::get('segundo', function() {

	return view('segundo_estilo');

});

Route::get('tercero', function() {

	return view('tercer_estilo');

});

FIN MANEJO DE VISTAS */

/* SESION

Route::get('sesion', 'SesionController@prueba');

FIN SESION */
