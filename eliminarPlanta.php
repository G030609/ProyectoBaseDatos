<?php
 include('conexion.php');
 $con=conexion();
 $id_planta=$_GET['id_planta'];

 $sql="DELETE FROM planta WHERE id_planta='$id_planta'";
 $query=mysqli_query($con,$sql);

if($query){
    Header("Location: planta.php");
}
?>