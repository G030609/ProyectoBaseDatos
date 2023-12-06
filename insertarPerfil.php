<?php
include('conexion.php');
$con=conexion();

$idPerfil=null;
$perfil=$_POST['perfil'];
$descripcion=$_POST['descripcion'];
$sql="INSERT INTO perfil (`idPerfil`, `perfil`, `descripcion`) values('$idPerfil','$perfil','$descripcion')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:perfil.php");
}
?>