
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
    </head>
    <body class="antialiased bg-gray-900">

    <!-- Bloque de busqueda -->

    <div class="flex items-center justify-center mt-1 bg-gray-800 rounded-xl">
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4">
        <label class="relative block">
        <span class="sr-only">Search</span>
        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
        <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"><!-- ... --></svg>
  </span>
  <input class="placeholder:italic placeholder:text-slate-400 block bg-gray-200 w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Busca en la web..." type="text" name="search"/>
</label>
    </div>
    </div>

    <!-- SEPARADOR DE BLOQUE -->
    <div class="bg-gray-200"></div>

    <!-- Bloque de Iniciar Sesión -->
    <div class="flex items-center justify-center mt-1 bg-gray-800 rounded-xl">
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4">

        
    <div class="flex-shrink-0">
        <a href="registrarse"><img class="h-12 w-12" src="\img\iniciarsesion.svg" alt="Iniciar Sesión"></a>
        <div class="text-xl font-medium text-white">Iniciar Sesión</div>
        <p class="text-gray-900 font-sm">Ingresa a la plataforma!</p>
    </div>

    <!-- SEPARADOR DE BLOQUE -->
    <div class="border-r border-gray-200 h-12"></div>

    <!-- Bloque de Contenido -->
    <div class="flex-shrink-0">
        <a href="contenido"><img class="h-12 w-12" src="\img\contenido.svg" alt="Contenido"></a>
        <div class="text-xl font-medium text-white">Contenido</div>
        <p class="text-gray-900 font-sm">Ingresa al contenido!</p>
    </div>

    </div>
</div>

    <!-- SEPARADOR DE BLOQUE -->
    <div class="bg-gray-200"></div>

<!-- Sección del Main -->
    <main>
    <div class="flex items-center justify-center mt-1 bg-gray-800 rounded-xl">
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4">
        
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

    <!-- Sección del Footer þ -->
<footer>
    <blockquote class="text-2xl italic text-center text-white bg-gray-800 mt-2 rounded-xl p-6 font-bold"> 
        Subí tus 
    <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-gray-200 relative inline-block">
    <span class="relative text-gray-600 font-bold">
        proyectos
    </span>
    </span>
        para intercambiar ideas con la comunidad.
    </blockquote>
</footer>

</body>
        
</html>
