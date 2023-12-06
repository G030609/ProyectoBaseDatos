<?php
include('conexion.php');
$con=conexion();

$id_planta=$_GET['id_planta'];

$sql="SELECT * FROM planta WHERE id_planta='$id_planta'";
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
        <form action="editarPlanta.php" method="POST" align="center">
          <h1>Editar Planta</h1>
          <input type="hidden" name="id_planta" value="<?=$row['id_planta']?>">
          <input type="text" name="nombre_planta" value="<?=$row['nombre_planta']?>">
          <input type="text" name="descripcion" value="<?=$row['descripcion']?>">
          <input type="text" name="lugar_origen" value="<?=$row['lugar_origen']?>">
          <input type="text" name="tipo_planta" value="<?=$row['tipo_planta']?>">
          <input type="text" name="descubridor_planta" value="<?=$row['descubridor_planta']?>">
          <input type="text" name="masInfo" value="<?=$row['masInfo']?>">
          <input type="text" name="habitat" value="<?=$row['habitat']?>">

          <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>