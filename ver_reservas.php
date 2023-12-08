<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="reservas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ver Reservas - UTDryving</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">UTDryving</a>
            <li class="nav-item active">
                        <a class="nav-link" href="acerca de nosotros.html">Acerca de Nosotros</a>
                    </li>
                    <li class="nav-item">
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
                    

        </div>
    </nav>

    <div class="container mt-5">
        <h2>Reservas Realizadas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha de Reserva</th>
                </tr>
            </thead>
            <tbody>
            <?php
include("conexion.php");

$query = "SELECT * FROM reservas";
$result = mysqli_query($conexion, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . (isset($row['id']) ? $row['id'] : '') . "</td>";
    echo "<td>" . (isset($row['nombre']) ? $row['nombre'] : '') . "</td>";
    echo "<td>" . (isset($row['email']) ? $row['email'] : '') . "</td>";
    echo "<td>" . (isset($row['fecha']) ? $row['fecha'] : '') . "</td>";
    echo "</tr>";
}

mysqli_close($conexion);
?>

            </tbody>
        </table>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 UTDryving</p>
    </footer>
</body>
</html>
