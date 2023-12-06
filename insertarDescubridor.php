<?php
include('conexion.php');
$con=conexion();

$id_descubridor=null;
$nombre_descubridor=$_POST['nombre_descubridor'];
$apellido_paterno=$_POST['apellido_paterno'];
$sql="INSERT INTO descubridor values('$id_descubridor','$nombre_descubridor','$apellido_paterno')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:descubridor.php");
}
?>