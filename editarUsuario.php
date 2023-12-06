<?php
include('conexion.php');
$con=conexion();

$idUsuario=$_POST['idUsuario'];
$nombreUsuario=$_POST['nombreUsuario'];
$contraseña=$_POST['contraseña'];
$perfilUsuario=$_POST['perfilUsuario'];
$sql="UPDATE usuario SET nombreUsuario='$nombreUsuario'
,contraseña='$contraseña',perfilUsuario='$perfilUsuario' WHERE idUsuario='$idUsuario'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
}
?>