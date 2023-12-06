<?php
include('conexion.php');
$con=conexion();

$id_categoria=$_POST['id_categoria'];
$nombre_categoria=$_POST['nombre_categoria'];
$sql="UPDATE categoria SET nombre_categoria='$nombre_categoria' WHERE id_categoria='$id_categoria'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: categoria.php");
}
?>