<?php
 include('conexion.php');
 $con=conexion();
 $idUsuario=$_GET['idUsuario'];

 $sql="DELETE FROM usuario WHERE idUsuario='$idUsuario'";
 $query=mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
}
?>