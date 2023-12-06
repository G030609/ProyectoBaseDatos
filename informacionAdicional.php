<?php
include('conexion.php');
$con=conexion();

$sql="SELECT * from informacionAdicional";
$query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Info</title>
</head>
<header align="center">
    <h1>Datos de la tabla Informacion Adicional</h1>
</header>

<body>
    <div>
        <form action="insertarInfo.php" method="POST">
            <h2>Agregar Informacion  Adicional</h2>
            <div class="form-group">
    <input type="text" class="form-control"  name="tipo_alimentacion" placeholder="Tipo de alimentacion">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="movilidad" placeholder="Movilidad">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="reproduccion" placeholder="Reproduccion">
  </div>
            <input type="submit" class="btn btn-info" value="Agregar Informacion">
        </form>
    </div>
    <div>
    <table class="table table-striped"
        <h2>Info</h2>
        <thead class="thead-dark">
        <tr>
            <td scope="col">IDE de la info</td>
            <td scope="col">Tipo de alimentacion</td>
            <td scope="col">Movilidad</td>
            <td scope="col">Reproduccion</td>
            
        </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)):
            ?>
            <tr>
          <th scope="row"><?= $row['idInfo']?></th>
          <th scope="row"><?= $row['tipo_alimentacion']?></th>
          <th scope="row"><?= $row['movilidad']?></th>
          <th scope="row"><?= $row['reproduccion']?></th>

          <th><a href="actualizarInfoAdicional.php?idInfo=<?= $row['idInfo']?>">Editar</a></th>
          <th><a href="eliminarInfo.php?idInfo=<?= $row['idInfo']?>">Eliminar</a></th>
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