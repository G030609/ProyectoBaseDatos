<?php
include('conexion.php');
$con=conexion();

$idInfoUsuario=$_GET['idInfoUsuario'];

$sql="SELECT * FROM infoUsuario WHERE idInfoUsuario='$idInfoUsuario'";
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
        <form action="editarInfoUsuario.php" method="POST" align="center">
          <h1>Editar Habitat</h1>
          <input type="hidden" name="idInfoUsuario" value="<?=$row['idInfoUsuario']?>">
          <input type="text" name="nombre" value="<?=$row['nombre']?>">
          <input type="text" name="apellidoPaterno" value="<?=$row['apellidoMaterno']?>">
          <input type="text" name="apellidoMaterno" value="<?=$row['apellidoMaterno']?>">
          <input type="text" name="cumple" value="<?=$row['cumple']?>">
          <input type="text" name="genero" value="<?=$row['genero']?>">
          <input type="text" name="usuarioM" value="<?=$row['usuarioM']?>">

          <input type="submit" value="Actualizar Info">
        </form>
    </div>
</body>
</html>