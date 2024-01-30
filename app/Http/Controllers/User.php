<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class User extends Controller
{
    public function procesarRegistro()
    {
        // Ruta al archivo en storage/app/json/usuarios.json
        $rutaArchivo = 'json/usuarios.json';

        // Verificar si el archivo existe antes de intentar leerlo
        if (Storage::exists($rutaArchivo)) {
            // Leer el contenido del archivo
            $contenido = Storage::get($rutaArchivo);

            // Realizar cualquier manipulación necesaria con $contenido
            // ...

            // Puedes imprimir el contenido para verificar
            echo $contenido;
        } else {
            // Manejar el caso en que el archivo no existe
            echo "El archivo no existe.";
        }
    }
}