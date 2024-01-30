<?php
// Obtener datos del formulario de inicio de sesión
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];

// Obtener contenido actual del archivo JSON
$usuarios = file_get_contents("json/usuarios.json");

// Decodificar el contenido JSON a un array de PHP
$usuariosArray = json_decode($usuarios, true);

// Buscar el usuario por su email
foreach ($usuariosArray as $usuario) {
    if ($usuario["email"] === $email && password_verify($password, $usuario["contraseña"])) {
        echo "Acceso permitido. Bienvenido, " . $usuario["usuario"] . "!";
        exit;
    }
}

// Si no se encontró el usuario, mostrar mensaje de error
echo "Acceso denegado. Verifica tus credenciales.";
?>