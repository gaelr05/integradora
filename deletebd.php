<?php
$id=$_GET['ideliminar'];
include("conexion.php");
$sql="DELETE FROM registro WHERE ID='".$id."'";
$result = mysqli_query($conexion,$sql);
if($result) {
echo "Registro eliminado exitosamente";
header('location:consulta.php');
}else{
echo "Error en la conexion";
}
mysqli_close($conexion);
?>