<?php
include('conexion.php');
$con=conexion();

$id_descubridor=$_GET['id_descubridor'];

$sql="SELECT * FROM descubridor WHERE id_descubridor='$id_descubridor'";
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
        <form action="editarDescubridor.php" method="POST" align="center">
          <h1>Editar Descubridor</h1>
          <input type="hidden" name="id_descubridor" value="<?=$row['id_descubridor']?>">
          <input type="text" name="nombre_descubridor" value="<?=$row['nombre_descubridor']?>">
          <input type="text" name="apellido_paterno" value="<?=$row['apellido_paterno']?>">

          <input type="submit" value="Actualizar Descubridor">
        </form>
    </div>
</body>
</html>