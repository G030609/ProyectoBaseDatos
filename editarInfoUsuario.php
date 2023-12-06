<?php
include('conexion.php');
$con=conexion();

$idInfoUsuario=$_POST['idInfoUsuario'];
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];
$cumple=$_POST['cumple'];
$genero=$_POST['genero'];

$sql="UPDATE infoUsuario SET nombre='$nombre'
,apellidoPaterno='$apellidoPaterno',apellidoMaterno='$apellidoMaterno',cumple='$cumple',genero='$genero' WHERE idInfoUsuario='$idInfoUsuario'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: infoUsuario.php");
}
?>