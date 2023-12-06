<?php
include('conexion.php');
$con=conexion();

$idHabitat=$_POST['idHabitat'];
$nombre_habitad=$_POST['nombre_habitad'];
$nombre_ubicacion=$_POST['ubicacion_habitad'];

$sql="UPDATE habitatPlanta SET nombre_habitad='$nombre_habitad',ubicacion_habitad='$ubicacion_habitad' WHERE idHabitat='$idHabitat'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: habitatplanta.php");
}
?>