<?php
include('conexion.php');
$con=conexion();

$idUsuario=$_GET['idUsuario'];

$sql="SELECT * FROM usuario WHERE idUsuario='$idUsuario'";
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
        <form action="editarUsuario.php" method="POST" align="center">
          <h1>Editar Habitat</h1>
          <input type="hidden" name="idUsuario" value="<?=$row['idUsuario']?>">
          <input type="text" name="nombreUsuario" value="<?=$row['nombreUsuario']?>">
          <input type="text" name="contraseña" value="<?=$row['contraseña']?>">
          <input type="text" name="perfilUsuario" value="<?=$row['perfilUsuario']?>">

          <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>