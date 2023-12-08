<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mensajes de Contacto - UTDryving</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Tu código de navegación aquí -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">UTDryving</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca de nosotros.html">Acerca de Nosotros</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="servicios.html">Nuestros Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calificar.html">Calificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comentarios.php">Comentarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mostrar_mensajes.php">Mensajes de Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ver_reservas.php">Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </nav>

    <main class="container mt-5">
        <section id="mensajes-contacto">
            <h2>Mensajes de Contacto</h2>

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

            // Obtener mensajes de la base de datos
            $sql = "SELECT nombre, correo, mensaje, fecha FROM mensajes_contacto";
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $nombre = $fila["nombre"];
                    $correo = $fila["correo"];
                    $mensaje = $fila["mensaje"];
                    $fecha = $fila["fecha"];

                    echo "<div class='card mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>De: $nombre</h5>";
                    echo "<p class='card-text'>Correo Electrónico: $correo</p>";
                    echo "<p class='card-text'>Mensaje: $mensaje</p>";
                    echo "<p class='card-text'><small class='text-muted'>Enviado el: $fecha</small></p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay mensajes de contacto aún.</p>";
            }

            // Cerrar la conexión
            $conexion->close();
            ?>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>Derechos de autor © 2023 UTDryving</p>
    </footer>
</body>
</html>
