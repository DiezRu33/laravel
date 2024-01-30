<?php

namespace Public\PHP;

use Illuminate\Support\Facades\Storage;

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

    $nuevoUsuario = [
        "usuario" => $usuario,
        "email" => $email,
        "contraseña" => $contraseña
    ];

    // Ruta al archivo en storage/app/json/usuarios.json
    $rutaArchivo = 'json/usuarios.json';

    // Obtener contenido actual del archivo JSON
    $usuarios = [];

    if (Storage::exists($rutaArchivo)) {
        $contenido = Storage::get($rutaArchivo);
        $usuarios = json_decode($contenido, true);
    }

    // Agregar el nuevo usuario al array
    $usuarios[] = $nuevoUsuario;

    // Codificar el array a formato JSON
    $usuariosJson = json_encode($usuarios, JSON_PRETTY_PRINT);

    // Guardar el JSON actualizado en el archivo
    Storage::put($rutaArchivo, $usuariosJson);

    echo "Usuario registrado exitosamente.";
}
?>