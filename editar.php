<?php
echo "<a href='registro.php'>Registro</a>";
echo "<a href='consulta.php'>Consulta</a>";

include("conexion.php");

$id = @$_GET['ideditar'];

if(isset($_POST['update'])){
    $nombreNUEVO = $_POST['nombrenuevo'];
    $correoNUEVO = $_POST['emailnuevo'];

    $sql = "UPDATE registro SET nombre='$nombreNUEVO', correo='$correoNUEVO' WHERE ID='$id'";
    $result = mysqli_query($conexion, $sql);

    if($result){
        mysqli_close($conexion);
        header('location:consulta.php');
    } else {
        echo "Error en la actualización: " . mysqli_error($conexion);
    }
}

$sql = "SELECT * FROM registro WHERE ID='$id'";
$result = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($result);
$NOMBRE = $row['nombre'];
$CORREO = $row['correo'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <title>Update User Register</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
        }

a {
    text-decoration: none;
    color: #333;
    padding: 10px;
    margin: 5px;
    display: inline-block;
    background-color: #eee;
    border-radius: 5px;
}

a:hover {
    background-color: #ddd;
}

.central {
    width: 50%;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    text-align: left;
}

fieldset {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 20px;
}

legend {
    font-size: 1.2em;
    font-weight: bold;
}

label {
    display: block;
    margin-bottom: 8px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

.container {
    text-align: center;
}

input[type="submit"], input[type="reset"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
}

input[type="submit"]:hover, input[type="reset"]:hover {
    background-color: #45a049;
}

/* Add your own styles below this line if needed */

    </style>
</head>
<body>
    <?php echo "<a href='index.html'>Home</a>"?>
    <?php echo "<a href='consulta.php'>Consulta</a>"?>
    
    <div class="central">
        <form method="post">
            <fieldset>
                <legend>
                    <h1>Update User Register Data</h1>
                </legend>
                <label for="formvalue1">Name:</label>
                <input type="text" name="nombrenuevo" value="<?php echo $NOMBRE;?>">
                <br>
                <label for="formvalue2">Email:</label>
                <input type="text" name="emailnuevo" value="<?php echo $CORREO;?>">
                <br>
            </fieldset>
            <p class="container">
                <input type="submit" name="update" value="Update" onclick="mensaje()">
                <input type="reset" value="Reset">
            </p>
            <script type='text/javascript'>
                function mensaje() {
                    alert('Registro actualizado exitosamente');
                }
            </script>
        </form>
    </div>
</body>
</html>
