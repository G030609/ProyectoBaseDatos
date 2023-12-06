<?php
include('conexion.php');
$con=conexion();

$id_descubridor=$_POST['id_descubridor'];
$nombre_descubridor=$_POST['nombre_descubridor'];
$apellido_paterno=$_POST['apellido_paterno'];
$sql="UPDATE descubridor SET nombre_descubridor='$nombre_descubridor',apellido_paterno='$apellido_paterno' WHERE id_descubridor='$id_descubridor'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: descubridor.php");
}
?>