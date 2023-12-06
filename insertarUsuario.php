<?php
include('conexion.php');
$con=conexion();

$idUsuario=null;
$nombreUsuario=$_POST['nombreUsuario'];
$contraseña=$_POST['contraseña'];
$perfilUsuario=$_POST['perfilUsuario'];
$sql="INSERT INTO usuario (`idUsuario`, `nombreUsuario`, `contraseña`, `perfilUsuario`) values('$idUsuario','$nombreUsuario','$contraseña','$perfilUsuario')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:usuario.php");
}
?>