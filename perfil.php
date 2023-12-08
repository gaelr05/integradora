<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="servicios.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="perfil">
        <form id="cerrar" action="logout.php" method="post">
            <h2>Perfil</h2>
            <hr>
            <br>
            <label for="username">Usuario</label>
            <p><?php echo $_SESSION['nombre']; ?></p>
            <br>
            <label for="email">Email</label>
            <p><?php echo $_SESSION['correo']; ?></p>
            <br>
            <input type="submit" name="cerrar" value="Cerrar Sesión">
        </form>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <p>Derechos de autor © 2023 UTDryving</p>
    </footer>
</body>
</html>
