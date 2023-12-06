<?php
include('conexion.php');
$con=conexion();

$idInfo=$_POST['idInfo'];
$tipo_alimentacion=$_POST['tipo_alimentacion'];
$movilidad=$_POST['movilidad'];
$reproduccion=$_POST['reproduccion'];
$sql="UPDATE informacionAdicional SET tipo_alimentacion='$tipo_alimentacion'
,movilidad='$movilidad',reproduccion='$reproduccion' WHERE idInfo='$idInfo'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: informacionAdicional.php");
}
?>