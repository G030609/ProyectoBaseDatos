<?php
include('conexion.php');
$con=conexion();

$idHabitat=null;
$nombre_habitad=$_POST['nombre_habitad'];
$ubicacion_habitad=$_POST['ubicacion_habitad'];
$sql="INSERT INTO habitatPlanta values('$idHabitat','$nombre_habitad','$ubicacion_habitad')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:habitatplanta.php");
}
?>