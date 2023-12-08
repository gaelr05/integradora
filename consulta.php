<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"hrf="main.css">
    <title>Consultas Base de Datos</title>
    <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
      
  </style>
</head>
<body>
    <h1>    </h1>
    <table>
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>correo</th>
            <th>contraseña</th>

        </tr>
        <?php
        include ("conexion.php");
        $accesso_bd=mysqli_select_db($conexion,$bd);
        if ($accesso_bd){
            echo "Conexion a la base de datos exitosa";
        }
        //Consulta
        $sql="SELECT * FROM registro";
        $result = mysqli_query($conexion,$sql);
        while($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['correo']."</td>";
            echo "<td>".$row['contraseña']."</td>";
            echo "<td> <a href='editar.php?ideditar=".$row['ID']."'>Editar</a>"."-";	
            echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deletebd.php?ideliminar=".$row['ID']."'>Eliminar</a> </td>";
            "</tr>";}
            $conexion->close();
            ?>
            </table>
</body>
</html>