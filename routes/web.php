<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/perfil', function () {
    return view('perfilUsuario');
});

Route::get('contenido', function() {
    return view('contenido');
});

Route::get('registrarse', function() {
    return view('registrarse');
});