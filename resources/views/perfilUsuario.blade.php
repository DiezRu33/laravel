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
    <body class="antialiased bg-slate-900">

    <div class="flex items-center justify-center bg-slate-800 mt-2 rounded-xl">
    <div class="w-64 dark:bg-slate-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4 border-solid border-color border">

        <!-- Bloque de Contenido -->
        <div class="flex-1">
            <a href="contenido"><img class="h-12 w-12" src="\img\contenido.svg" alt="Contenido"></a>
            <div class="font-medium text-white mt-1">Contenido</div>
            <p class="text-slate-500">Ingresa al contenido!</p>
        </div>

        <!-- Separador entre bloques -->
        <div class="border border-white h-12"></div>

        <!-- Nueva sección "Volver a Inicio" -->
        <div class="flex-1">
            <a href="/"><img class="h-12 w-12" src="\img\volver.svg" alt="Volver a Inicio"></a>
            <div class="font-medium text-white mt-1">Inicio</div>
            <p class="text-slate-500">Volver!</p>
        </div>

    </div>
</div>
    
<!-- Separador de blques -->
<div class="m-5 bg-gray-200"></div>

<!-- Cargar archivos del perfil -->

<div class="flex items-center justify-center bg-slate-800 mt-2 bg-gray-600 rounded-xl">
    <div class="max-w-xl dark:bg-slate-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4 border-solid border-color border">

    <form class="flex items-center space-x-6">
        <div class="shrink-0">
            <img src="/img/fotoPerfil.svg" alt="foto de perfil actual" class="h-16 object-cover rounded-full">
        </div>
        <label class="block">
            <span class="sr-only">Subir foto de perfíl</span>
            <input type="file" class="block w-full text-sm text-white bg-slate-700 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-gray-800 hover:file:bg-blue-300 file:border-solid file:border-white"/>
        </label>
    </form>

    <button class="bg-gray-800 text-white max-w-s rounded-xl shadow-lg flex space-x-5 hover:bg-gray-700 text-s pt-5 pl-2 pr-2">
        Subir imágen!
    </button>
    </div>
</div>

<!-- FIN SECCION CARGAR ARCHIVOS DE PERFIL -->

<!-- Separador de blques -->
<div class="m-5 bg-gray-200"></div>

<!-- Bloque de dato xd-->

<div class="flex items-center justify-center bg-slate-800 mt-2 rounded-xl">
    <div class="max-w-xl dark:bg-slate-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4 border-solid border-color border">

    <ul role="list" class="marker:text-blue-700 list-disc pl-5 space-y-3 text-white">
        <ul class="font-bolder text-gray-200">Ventajas de tener foto de Perfíl</ul>
        <li>Más confianza con otro psiconauta</li>
        <li>Subí una foto piola</li>
        <li>Ganas el doble de XP en cualquier jueguito</li>
    </ul>

</div>
</div>

<!-- Separador de blques -->
<div class="m-5 bg-gray-200"></div>


<div class="flex items-center justify-center bg-gray-700 mt-2 bg-gray-600 rounded-xl dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
    
    <div class="max-w-xl bg-gray-700 p-4 rounded-xl shadow-lg flex space-x-8 m-4 dark:bg-slate-700 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl border-solid border-color border">

    <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
  <div>
    <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
      <img class="h-6 w-6 text-white" src="img/cube-solid.svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img>
    </span>
  </div>

    <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Escribir al revés, re zarpado</h3>
    <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">

        <!-- The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space. -->

        El lapiz de Gravedad Cero puede usarse para escribir en cualquier dirección, incluyendo al revés. Incluso funciona en el espacio!
    </p>
</div>
    </div>

    <!-- FIN BLOQUE DE DATOS -->

    
<!-- Separador de blques -->
    <div class="m-5 bg-gray-200"></div>

<!-- REDES SOCIALES -->

<div class="bg-white dark:bg-slate-700 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl border-solid border-white border">
<div class="group flex items-center">
  <img class="shrink-0 h-12 w-12 rounded-full mr-3" src="img/connected2.svg" alt="" />
  <div class="ltr:ml-3 rtl:mr-3">
    <p class="text-sm font-medium text-slate-300 group-hover:text-white">LinkedIn</p>
    <p class="text-sm font-medium text-slate-500 group-hover:text-slate-300">Red social de 'Usuario'</p>
  </div>
</div>

<div class="group flex items-center">
  <img class="shrink-0 h-12 w-12 rounded-full mr-3" src="img/connected1.svg" alt="" />
  <div class="rtl:ml-3 rtl:mr-3">
    <p class="text-sm font-medium text-slate-300 group-hover:text-white">Github</p>
    <p class="text-sm font-medium text-slate-500 group-hover:text-slate-300">Red social de 'Usuario'</p>
  </div>
</div>
</div>

</div>

</body>
        
</html>