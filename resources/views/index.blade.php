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
        <script src="js/scriptIndex.js"></script>
        
    </head>
<body class="antialiased bg-gray-900">
        
    <!-- Bloque de busqueda -->
<div class="flex items-center justify-center mt-1 bg-gray-800 rounded-xl" id="contenedorBusquedaFuera">
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4" id="contenedorBusquedaDentro">
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

    <!-- SEPARADOR DE BLOQUE -->
    <div class="bg-gray-200"></div>

    <!-- Bloque de Secciones -->
<div class="flex items-center justify-center mt-1 bg-gray-800 rounded-xl" id="contenedorSeccionesFuera">
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4" id="contenedorSeccionesDentro">

        <!-- Bloque de Iniciar Sesión -->
        <div class="flex-shrink-0">
            <a href="registrarse" onclick="closeDropdown()">
                <img class="h-12 w-12" src="\img\iniciarsesion.svg" alt="Iniciar Sesión">
            </a>
            <div class="text-xl font-medium text-white">Iniciar Sesión</div>
            <p class="text-gray-900 font-sm">Ingresa a la plataforma!</p>
        </div>

            <!-- SEPARADOR DE BLOQUE -->
            <div class="border-r border-gray-200 h-12"></div>

        <!-- Bloque de Contenido -->
        <div class="flex-shrink-0">
            <a href="contenido" onclick="closeDropdown()">
                <img class="h-12 w-12" src="\img\contenido.svg" alt="Contenido">
            </a>
            <div class="text-xl font-medium text-white">Contenido</div>
            <p class="text-gray-900 font-sm">Ingresa al contenido!</p>
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
                <button class="dropdown-item text-white" onclick="toggleTheme('light')" id="light">
                    Modo Claro
                </button>

                <button class="dropdown-item text-white" onclick="toggleTheme('dark')" id="dark">
                    Modo Oscuro
                </button>
            </div>
        </div>
    </div>
</div>


<!-- FIN DE BLOQUE DE INICIO DE SESION -->

    <!-- SEPARADOR DE BLOQUE -->
    <div class="bg-gray-200"></div>

<!-- Sección del Main -->
    <main>
    <div class="flex items-center justify-center mt-1 bg-gray-800 rounded-xl" id="contenedorMainFuera">
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4" id="contenedorMainDentro">
        
    <input type="text" name="comentario" id="comentario" class="bg-white text-gray-900 font-bold hover:bg-gray-300 rounded-xl flex justify-center content-center">

    <!-- Separador entre bloques -->
    <div class="border-r border-gray-500 h-12"></div>
    
    <button class="bg-gray-800 text-white max-w-m p-3 rounded-xl shadow-lg flex space-x-5 hover:bg-gray-400">
        Iniciar proyecto!
    </button>

        </div>
    </div>
</div>

</main>

<!-- Sección del Aside þ -->
<aside>
<div class="contenedor_aside">

</div>
</aside>
        
    <!-- SEPARADOR DE BLOQUE -->
    <div class="bg-gray-200"></div>

<!-- Sección de Contribuyentes -->
<!-- <div class="flex items-center justify-center mt-1 bg-gray-800 rounded-xl" id="contenedorMainFuera">
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4" id="contenedorMainDentro">
        
    </div>
</div> -->

    <!-- SEPARADOR DE BLOQUE -->
    <div class="bg-gray-200"></div>

    <!-- Sección del Footer þ -->
<footer class="flex justify-center items-center">
<blockquote class="text-2xl italic text-white bg-gray-800 mt-2 rounded-xl p-3 font-bold flex" id="contenedorFooterFuera"> 
        <span class="mt-12">Subí tus </span>

        <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-gray-400 relative h-10 mx-2 mt-12">
            <span class="text-gray-900 relative">
                proyectos
            </span>
        </span>

        <span class="mt-12 mr-5">para intercambiar ideas con la comunidad.</span>

        <!-- Separador entre bloques -->
    <div class="border-r border-gray-500 h-12 mx-5 mt-12"></div>

    <!-- Bloque de Contribuyentes -->
    <div class="flex justify-items-end mt-1 bg-gray-800 rounded-xl" id="contenedorMainFuera">
        <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 mx-5" id="contenedorMainDentro">

            <div>
                <div class="flex items-center space-x-2 text-base">
                    <h4 class="font-semibold text-slate-900">Contribuyentes</h4>
                    <span class="rounded-full bg-slate-100 px-2 py-1 text-xs font-semibold text-slate-700">204</span>
                </div>

                <div class="mt-3 flex -space-x-2">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" alt="" src="" id="contribuidor1"/>
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" alt="" src="" id="contribuidor2"/>
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" alt="" src="" id="contribuidor3"/>
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" alt="" src="" id="contribuidor4"/>
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" alt="" src="" id="contribuidor5"/>
                </div>

                <div class="mt-3 text-sm font-medium">
                    <a href="#" class="text-blue-500">+ 198 others</a>
                </div>
            </div>

        </div>
    </div>

    <!-- FIN BLOQUE DE CONTRIBUYENTES -->
</blockquote>

    
</footer>

</body>
        
</html>
