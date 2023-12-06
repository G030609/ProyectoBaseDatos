<?php
include('conexion.php');
$con=conexion();

$id_categoria=null;
$nombre_categoria=$_POST['nombre_categoria'];
$sql="INSERT INTO categoria values('$id_categoria','$nombre_categoria')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:categoria.php");
}
?>