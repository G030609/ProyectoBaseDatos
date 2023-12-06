<?php
include('conexion.php');
$con=conexion();

$idHabitat=$_GET['idHabitat'];

$sql="SELECT * FROM habitatPlanta WHERE idHabitat='$idHabitat'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body align="center">
    <div  align="center">
        <form action="editarHabitat.php" method="POST" align="center">
          <h1>Editar Habitat</h1>
          <input type="hidden" name="idHabitat" value="<?=$row['idHabitat']?>">
          <input type="text" name="nombre_habitad" value="<?=$row['nombre_habitad']?>">
          <input type="text" name="ubicacion_habitad" value="<?=$row['ubicacion_habitad']?>">

          <input type="submit" value="Actualizar Habitat">
        </form>
    </div>
</body>
</html>