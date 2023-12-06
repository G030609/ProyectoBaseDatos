<?php
 include('conexion.php');
 $con=conexion();
 $id_categoria=$_GET['id_categoria'];

 $sql="DELETE FROM categoria WHERE id_categoria='$id_categoria'";
 $query=mysqli_query($con,$sql);

if($query){
    Header("Location: categoria.php");
}
?>