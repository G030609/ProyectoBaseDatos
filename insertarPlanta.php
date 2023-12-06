<?php
include('conexion.php');
$con=conexion();

$id_planta=null;
$nombre_planta=$_POST['nombre_planta'];
$descripcion=$_POST['descripcion'];
$lugar_origen=$_POST['lugar_origen'];
$tipo_planta=$_POST['tipo_planta'];
$descubridor_planta=$_POST['descubridor_planta'];
$masInfo=$_POST['masInfo'];
$habitat=$_POST['habitat'];
$sql="INSERT INTO planta values('$id_planta','$nombre_planta','$descripcion_planta','$lugar_origen','$tipo_planta','$descubridor_planta',
'$masInfo','$habitat')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:planta.php");
}
?>