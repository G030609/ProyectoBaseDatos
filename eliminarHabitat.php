<?php
 include('conexion.php');
 $con=conexion();
 $idHabitat=$_GET['idHabitat'];

 $sql="DELETE FROM habitatPlanta WHERE idHabitat='$idHabitat'";
 $query=mysqli_query($con,$sql);

if($query){
    Header("Location: habitatplanta.php");
}
?>