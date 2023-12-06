<?php
include('conexion.php');
$con=conexion();

$idInfo=$_GET['idInfo'];

$sql="SELECT * FROM informacionAdicional WHERE idInfo='$idInfo'";
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
        <form action="editarInfo.php" method="POST" align="center">
          <h1>Editar Habitat</h1>
          <input type="hidden" name="idInfo" value="<?=$row['idInfo']?>">
          <input type="text" name="tipo_alimentacion" value="<?=$row['tipo_alimentacion']?>">
          <input type="text" name="movilidad" value="<?=$row['movilidad']?>">
          <input type="text" name="reproduccion" value="<?=$row['reproduccion']?>">

          <input type="submit" value="Actualizar Info">
        </form>
    </div>
</body>
</html>