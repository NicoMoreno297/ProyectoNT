<?php

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/questionario', function () {
    return view('questionario');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/cuestionario', function () {
    return view('cuestionario');
});

Route::post('/ingresoperfil','perfilDP@ingreso');

Route::get('/cargarcuestionario','questionDP@cargarPreguntas');

Route::get('/sugerir','perfilDP@seleccionarPelicula');

Route::post('/validar','usuarioDP@validar');

Route::get('/preferencias', 'questionDP@calcularPreferencias');