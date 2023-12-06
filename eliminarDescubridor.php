<?php
 include('conexion.php');
 $con=conexion();
 $id_descubridor=$_GET['id_descubridor'];

 $sql="DELETE FROM descubridor WHERE id_descubridor='$id_descubridor'";
 $query=mysqli_query($con,$sql);

if($query){
    Header("Location: descubridor.php");
}
?>