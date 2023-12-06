<?php
 include('conexion.php');
 $con=conexion();
 $idInfo=$_GET['idInfo'];

 $sql="DELETE FROM informacionAdicional WHERE idInfo='$idInfo'";
 $query=mysqli_query($con,$sql);

if($query){
    Header("Location: informacionAdicional.php");
}
?>