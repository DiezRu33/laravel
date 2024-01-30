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
        <script src="js/scriptContenido.js"></script>
    </head>

    <body class="antialiased bg-gray-900">

    <!-- Bloque HEADER -->
    <div class="flex items-center justify-center bg-gray-500 mt-2 bg-gray-600 rounded-xl">
    <div class="max-w-xl bg-gray-400 p-4 rounded-xl shadow-lg flex space-x-8 m-4">

        <!-- Bloque de Iniciar Sesión -->
        <div class="flex-shrink-0">
            <a href="registrarse"><img class="h-12 w-12" src="\img\iniciarsesion.svg" alt="Iniciar Sesión"></a>
            <div class="text-xl font-medium text-black">Iniciar Sesión</div>
            <p class="text-gray-800 font-small">Ingresa a la plataforma!</p>
        </div>

        <!-- Separador entre bloques -->
        <div class="border-r border-gray-600 h-12"></div>

        <div class="flex-shrink-0">
            <a href="/"><img class="h-12 w-12" src="\img\volver.svg" alt="Volver a Inicio"></a>
            <div class="text-xl font-medium text-black">Inicio</div>
            <p class="text-gray-800 mr-3">Volver!</p>
        </div>

    </div>
</div>

    <!-- FIN BLOQUE HEADER -->
    
    <!-- Separador de Bloques -->
    <div class="m-5 bg-gray-200"></div>

<!-- Crear Contenido -->
<div class="flex items-center justify-center bg-gray-500 mt-2 bg-gray-600 rounded-xl">

    <!-- Subir Nuevo Contenido -->
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4 ">
        <a href="#" class="group block max-w-xs mx-auto rounded-lg p-6 bg-gray-500 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
            <div class="flex items-center space-x-3">
                <img class="h-6 w-6 stroke-sky-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24" src="img/upload.svg"></img>
                <h3 class="text-white font-bold group-hover:text-black text-sm font-semibold">
                    Nuevo contenido
                </h3>
            </div>
            <p class="text-white font-m group-hover:text-gray-800 text-sm">
                Subí un archivo para compartir con la comunidad.
            </p>
        </a>
    </div>
    <!-- FIN SUBIR CONTENIDO -->

<!-- Separador entre bloques -->
<div class="border-r border-gray-800 h-12"></div>

    <!-- Bloque Estado de Publicación -->
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4 ">
        <div class="w-80 bg-gray-500 rounded-xl pl-3 pr-3 pb-3 shadow-lg max-h-xl">

                <legend class="text-gray-800 font-bold text-m mt-2 mb-3">
                    Estado de Publicación
                </legend>
                
                <!-- Nuevo archivo Público -->
                <input id="publico" 
                    class="peer/publico" 
                    type="radio" 
                    name="estado" 
                    checked>
                <label for="publico" class="peer-checked/publico:text-sky-500 font-bold">
                    Público
                </label>

                <div class="hidden peer-checked/publico:block text-sm text-white">
                    Compartir con la comunidad tu proyecto
                </div>

                <!-- Nuevo archivo Privado -->
                <input id="privado" 
                    class="peer/privado" 
                    type="radio" 
                    name="estado" 
                    checked>
                <label for="privado" class="peer-checked/privado:text-sky-500 font-bold">
                    Privado
                </label>

                <div class="hidden peer-checked/privado:block text-sm text-white">
                    Guarda tu proyecto en privado.
                </div>

    <!-- Separador entre bloques -->
    <div class="border-r border-gray-500 h-12"></div>

            <div>
                <button class="bg-gray-900 text-white p-3 rounded-xl shadow-lg hover:bg-gray-800">
                    Subir proyecto!
                </button>
            </div>

        </div>
    </div>
</div>
<!-- FIN BLOQUE ESTADO DE PUBLICACIÓN -->

<!-- Separador entre bloques -->
<div class="border-r border-gray-500 h-12"></div>

<div class="bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-4 justify-center items-center mt-1">
    <div class="w-2/4 bg-gray-500 rounded-xl pl-3 pr-3 pb-3 shadow-lg max-h-xl flex justify-around content-center mt-5">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 p-4">

    </div>

    </div>
</div>


</body>
        
</html>