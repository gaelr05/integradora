<?php
$nombreUsuario = "root";
$contraseña = "";
$nombreBaseDatos = "integradora";
$servidor = "localhost";

// Crear conexión
$conexion = new mysqli($servidor, $nombreUsuario, $contraseña, $nombreBaseDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa";
}