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

Route::get('/welcome2', function () {
    return view('welcome');
});


Route::get('/cuestionario', function () {
    return view('cuestionario');
});

Route::get('/ingreso', function () {
    return view('ingreso');
});

Route::post('/analisis', 'perfil@analizar_datos');

Route::post('/perfilbases', 'perfil@ingreso');

Route::get('/preferencias/{preferencias}', function ($preferencias) {
    return view('preferencias',['preferencias'=> $preferencias]);
});

Route::get('/datos', function () {
    return view('Datos');
});

Route::post('/seleccion','seleccion@seleccionarPelicula');

Route::get('/listado', function () {
    return view('listado');
});