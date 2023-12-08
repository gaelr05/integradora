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
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la base de datos
$sql = "INSERT INTO mensajes_contacto (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Mensaje enviado correctamente.";
} else {
    echo "Error al enviar el mensaje: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
