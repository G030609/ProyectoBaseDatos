<?php
include('conexion.php');
$con=conexion();

$sql="SELECT * from habitatPlanta";
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
    <h1>Datos de la tabla habitat planta</h1>
</header>


<body>
    <div>
        <form action="insertarHabitat.php" method="POST">
            <h2>Crear Habitat</h2>
            <div class="form-group">
    <input type="text" class="form-control"  name="nombre_habitad" placeholder="Nombre del habitat">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="ubicacion_habitad" placeholder="Ubicacion del habitat">
  </div>
            <input type="submit" class="btn btn-info" value="Agregar habitat">
        </form>
    </div>
    <div>
    <table class="table table-striped"
        <h2>Descubridores</h2>
        <thead class="thead-dark">
        <tr>
            <td scope="col">IDE del habitat</td>
            <td scope="col">Nombre del habitat</td>
            <td scope="col">Ubicacion del habitat</td>
        </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)):
            ?>
            <tr>
          <th scope="row"><?= $row['idHabitat']?></th>
          <th scope="row"><?= $row['nombre_habitad']?></th>
          <th scope="row"><?= $row['ubicacion_habitad']?></th>

          <th><a href="actualizarHabitat.php?idHabitat=<?= $row['idHabitat']?>">Editar</a></th>
          <th><a href="eliminarHabitat.php?idHabitat=<?= $row['idHabitat']?>">Eliminar</a></th>
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
</html>