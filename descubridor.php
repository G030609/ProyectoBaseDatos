<?php
include('conexion.php');
$con=conexion();

$sql="SELECT * from descubridor";
$query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Descubridor</title>
</head>
<header align="center">
    <h1>Datos de la tabla descubridor</h1>
</header>

<body>
    <div>
        <form action="insertarDescubridor.php" method="POST">
            <h2>Crear Descubridor</h2>
            <div class="form-group">
    <input type="text" class="form-control"  name="nombre_descubridor" placeholder="Nombre del descubridor">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="apellido_paterno" placeholder="Apellido">
  </div>
            <input type="submit" class="btn btn-info" value="Agregar descubridor">
        </form>
    </div>
    <div>
    <table class="table table-striped"
        <h2>Descubridores</h2>
        <thead class="thead-dark">
        <tr>
            <td scope="col">IDE del descubridor</td>
            <td scope="col">Nombre del descubridor</td>
            <td scope="col">Apellido Paterno</td>
        </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)):
            ?>
            <tr>
          <th scope="row"><?= $row['id_descubridor']?></th>
          <th scope="row"><?= $row['nombre_descubridor']?></th>
          <th scope="row"><?= $row['apellido_paterno']?></th>

          <th><a href="actualizarDescubridor.php?id_descubridor=<?= $row['id_descubridor']?>">Editar</a></th>
          <th><a href="eliminarDescubridor.php?id_descubridor=<?= $row['id_descubridor']?>">Eliminar</a></th>
          </tr>
          <?php endwhile; ?>
        </tbody>

    </table>
    </div>
    <div align="center">
    <a class="btn btn-primary" href="menu.html" role="button">Regresar</a>
    </div>
</body>

</html>