<?php
    include ("conexion.php");
    $correo =$_POST['correo'];
    $contraseña =$_POST['contraseña'];
    $nombre =$_POST['nombre'];
    $sql = "INSERT INTO registro (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
    header("location: index.html");
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        echo "Registro exitoso";
    } else {
        echo "Fallido";
    }
    mysqli_close($conexion);
    ?>