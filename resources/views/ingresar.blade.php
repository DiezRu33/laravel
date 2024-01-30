<?php 

    $usuarios = (array) [];
    $input = (string) "";

    if ( strlen($input) >= 2 ){

            foreach( $usuarios as $usuario){
                if ( count($usuarios) >= 1)
                    array_push($usuarios, $input);  
                    echo "Los usuarios registrados son:\n";
                    echo $usuario;
                    "<br></br>";
        }  
    }
    
?> 

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="js/script.js"></script>
    </head>


<body class="antialiased bg-gray-900">

<!-- Bloque de busqueda -->
<div class="flex items-center justify-center mt-1 bg-gray-800 rounded-xl">
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4">
        <label class="relative block">
            <span class="sr-only">Buscar</span>
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"></svg>
            </span>
                <input class="placeholder:italic placeholder:text-slate-400 block bg-gray-200 w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" 
                placeholder="Busca en la web..." 
                type="text" 
                name="search"/>
        </label>
    </div>
</div>

</div>
</div>

    <!-- SEPARADOR DE BLOQUES -->
    <div class="m-5 bg-gray-200"></div>
    
    <div class="flex items-center justify-center bg-gray-500 mt-2 bg-gray-600 rounded-xl">
    <div class="max-w-xl bg-gray-400 p-4 rounded-xl shadow-lg flex space-x-8 m-4">

        <!-- Bloque de Iniciar Sesión -->
        <div class="flex-shrink-0">
            <a href="registrarse" onclick="closeDropdown()">
                <img class="h-12 w-12" src="\img\iniciarsesion.svg" alt="Iniciar Sesión">
            </a>
            <div class="text-xl font-medium text-black">Iniciar Sesión</div>
            <p class="text-gray-800 font-small">Ingresa a la plataforma!</p>
        </div>

        <!-- Separador entre bloques -->
        <div class="border-r border-gray-600 h-12"></div>

        <!-- Bloque de Contenido -->
        <div class="flex-shrink-0">
            <a href="contenido" onclick="closeDropdown()">
                <img class="h-12 w-12" src="\img\contenido.svg" alt="Contenido">
            </a>
            <div class="text-xl font-medium text-black">Contenido</div>
            <p class="text-gray-800 mr-3">Ingresa al contenido!</p>
        </div>

        <!-- Separador entre bloques -->
        <div class="border-r border-gray-600 h-12"></div>

        <!-- Nueva sección "Volver a Inicio" -->
        <div class="flex-shrink-0">
            <a href="/">
                <img class="h-12 w-12" src="\img\volver.svg" alt="Volver a Inicio">
            </a>
            <div class="text-xl font-medium text-black">Inicio</div>
            <p class="text-gray-800 mr-3">Volver!</p>
        </div>

        <!-- SEPARADOR DE BLOQUE -->
        <div class="border-r border-gray-400 h-12"></div>

        <!-- Bloque de Menú Desplegable (Flecha Abajo) -->
        <div class="dropdown relative">
            <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center show" 
                id="bd-theme" 
                type="button" 
                aria-expanded="true" 
                data-bs-toggle="dropdown" 
                data-bs-display="static" 
                aria-label="Toggle theme (dark)" 
                onclick="toggleDropdown()">
                <img class="bi my-1 theme-icon-active h-6 w-6" src="/img/flechaAbajo.svg" alt="Flecha Abajo">
            </button>
            <div class="dropdown-menu absolute right-0 mt-2 bg-gray-800 border border-gray-700 rounded-md hidden" id="theme-options">
                <button class="dropdown-item text-white" onclick="toggleTheme('light')">
                    Modo Claro
                </button>
                <button class="dropdown-item text-white" onclick="toggleTheme('dark')">
                    Modo Oscuro
                </button>
            </div>
        </div>

    </div>
</div>
    
    <div class="m-5 bg-gray-200"></div>

    <!-- Bloque de Registro -->

    <div class="flex items-center justify-center bg-gray-500 mt-2 bg-gray-600 rounded-xl">
    <div class="max-w-xl bg-gray-400 p-4 rounded-xl shadow-lg flex space-x-8 m-4">
        <form method="POST" action="public/validar-acceso.php">
            <label class="block">

            <!-- Email -->
            <label class="block">
            <label class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500" for="email">Email</label>
                <input type="email" 
                    placeholder="Correo electrónico" 
                    class="peer mt-1 w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 hover:text-black text-gray-300 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 invalid-input:invalid :invalid-pink-400"
                    name="email"
                    />

                <p class="invisible peer-invalid:visible text-pink-600 text-sm">
                    Escribí bien gil de goma.
                </p>
            </label>

            <!-- Contraseña -->
            <label class="block">
                <label class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500" 
                    for="contraseña">Contraseña</label>

                <input type="password" 
                    placeholder="Contraseña weon" 
                    class="peer bg-gray-400 mt-1 w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
                name="contraseña"
                />
                <p class="invisible peer-invalid:visible text-pink-600 text-sm">
                    Dale boludo.
                </p>
            </label>

            <div class="flex items-center justify-center mt-2">
                <button class="bg-gray-900 text-white p-3 rounded-xl shadow-lg hover:bg-gray-800" type="submit" value="Registrar">
                        REGISTRARSE!
                </button>
            </div>
    </form>

    </div>
    </div>

</body>
        
</html>
