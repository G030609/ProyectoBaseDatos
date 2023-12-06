<?php
 include('conexion.php');
 $con=conexion();
 $idInfoUsuario=$_GET['idInfoUsuario'];

 $sql="DELETE FROM infoUsuario WHERE idInfoUsuario='$idInfoUsuario'";
 $query=mysqli_query($con,$sql);

if($query){
    Header("Location: infoUsuario.php");
}
?>