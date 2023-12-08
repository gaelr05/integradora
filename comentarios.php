<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Comentarios y Calificaciones - UTDryving</title>
</head>
<body>
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
                        <a class="nav-link" href="servicios.html">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservas.html">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca de nosotros.html">Acerca de Nosotros</a>
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

    <div class="container mt-5">
        <h2>Comentarios y Calificaciones</h2>
        
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

        // Obtener comentarios de la base de datos
        $sql = "SELECT estrellas, comentarios, fecha FROM calificaciones";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $estrellas = $fila["estrellas"];
                $comentarios = $fila["comentarios"];
                $fecha = $fila["fecha"];

                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>Calificación: $estrellas estrellas</h5>";
                echo "<p class='card-text'>$comentarios</p>";
                echo "<p class='card-text'><small class='text-muted'>Fecha: $fecha</small></p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay comentarios aún.</p>";
        }

        // Cerrar la conexión
        $conexion->close();
        ?>
    </div>
</body>
</html>
