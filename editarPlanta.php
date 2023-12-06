<?php
include('conexion.php');
$con=conexion();

$id_planta=$_POST['id_planta'];
$nombre_planta=$_POST['nombre_planta'];
$descripcion=$_POST['descripcion'];
$lugar_origen=$_POST['lugar_origen'];
$tipo_planta=$_POST['tipo_planta'];
$descubridor_planta=$_POST['descubridor_planta'];
$masInfo=$_POST['masInfo'];
$habitat=$_POST['habitat'];

$sql="UPDATE planta SET nombre_planta='$nombre_planta'
,descripcion='$descripcion',lugar_origen='$lugar_origen',tipo_planta='$tipo_planta',descubridor_planta='$descubridor_planta',
masInfo='$masInfo',habitat='$habitat' WHERE id_planta='$id_planta'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: planta.php");
}
?>