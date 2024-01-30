<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $nombre = $_SERVER['nombre'];           
        echo "Variables guardadas...";                 
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

        <!-- Styles -->
        <style>
            *{
                padding: 0;
                margin: 0;
            }
        </style>
    </head>
    < class="antialiased">

        <div>
            <nav>
                <ul><a href="#">Información</a></ul>
                <ul><a href="#">Contacto</a></ul>
                <ul><a href="#">Seguridad</a></ul>
            </nav>
        </div>
    <div>

></>

        </div>
    </div>
        
        <div>
            <div class="contenedor-titulo">
                <h1 class="titulo">Main title</h1>
            </div>

            <div class="contenedor-p">
                <p class="para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, debitis. Esse consequuntur dolore cumque eius cupiditate nesciunt dicta, ipsa voluptates delectus ipsum, sed beatae praesentium natus obcaecati pariatur dolorem veritatis.

                </p>
            </div>
            
        </div>
    </body>
</html>
