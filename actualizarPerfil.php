<?php
include('conexion.php');
$con=conexion();

$idPerfil=$_GET['idPerfil'];

$sql="SELECT * FROM perfil WHERE idPerfil='$idPerfil'";
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
        <form action="editarPerfil.php" method="POST" align="center">
          <h1>Editar Descubridor</h1>
          <input type="hidden" name="idPerfil" value="<?=$row['idPerfil']?>">
          <input type="text" name="perfil" value="<?=$row['perfil']?>">
          <input type="text" name="descripcion" value="<?=$row['descripcion']?>">

          <input type="submit" value="Actualizar Perfil">
        </form>
    </div>
</body>
</html>