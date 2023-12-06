<?php
 include('conexion.php');
 $con=conexion();
 $idPerfil=$_GET['idPerfil'];

 $sql="DELETE FROM perfil WHERE idPerfil='$idPerfil'";
 $query=mysqli_query($con,$sql);

if($query){
    Header("Location: perfil.php");
}
?>