<?php
include('conexion.php');
$con=conexion();

$idPerfil=$_POST['idPerfil'];
$perfil=$_POST['perfil'];
$descripcion=$_POST['descripcion'];
$sql="UPDATE perfil SET perfil='$perfil',descripcion='$descripcion' WHERE idPerfil='$idPerfil'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: perfil.php");
}
?>