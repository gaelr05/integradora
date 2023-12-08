<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si las claves existen antes de acceder a ellas
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"] : "";

    // Realizar acciones con los valores, como guardar en la base de datos
    // ...

    // Mostrar un mensaje de reserva exitosa
    echo "Reserva exitosa";
}
?>
