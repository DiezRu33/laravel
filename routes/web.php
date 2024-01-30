<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('registrarse', function() {
    return view('registrarse');
});

Route::get('/json/usuarios.json', 'User@procesarRegistro');

Route::get('acceso', function() {
    return view('ingresar');
});

Route::get('/perfil', function () {
    return view('perfilUsuario');
});

Route::get('contenido', function() {
    return view('contenido');
});

