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
$viaje_id = $_POST['viaje_id'];
$estrellas = $_POST['stars'];
$comentarios = $_POST['comments'];

// Insertar datos en la base de datos
$sql = "INSERT INTO calificaciones (viaje_id, estrellas, comentarios) VALUES ('$viaje_id', '$estrellas', '$comentarios')";

if ($conexion->query($sql) === TRUE) {
    echo "Calificación enviada correctamente.";
} else {
    echo "Error al enviar la calificación: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
