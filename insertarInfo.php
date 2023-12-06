<?php
include('conexion.php');
$con=conexion();

$idInfo=null;
$tipo_alimentacion=$_POST['tipo_alimentacion'];
$movilidad=$_POST['movilidad'];
$reproduccion=$_POST['reproduccion'];
$sql="INSERT INTO informacionAdicional values('$idInfo','$tipo_alimentacion','$movilidad','$reproduccion')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:informacionAdicional.php");
}
?>