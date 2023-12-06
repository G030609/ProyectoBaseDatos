<?php
include('conexion.php');
$con=conexion();

$idInfoUsuario=null;
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];
$cumple=$_POST['cumple'];
$genero=$_POST['genero'];
$usuarioM=$_POST['usuarioM'];
$sql="INSERT INTO  infoUsuario (idInfoUsuario, nombre, apellidoPaterno, apellidoMaterno, cumple, genero, usuarioM) values('$idInfoUsuario','$nombre','$apellidoPaterno','$apellidoMaterno','$cumple','$genero',
'$usuarioM')";

$query=mysqli_query($con,$sql);



if($query){
    Header("Location:infoUsuario.php");
}
?>