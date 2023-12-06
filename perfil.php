<?php
include('conexion.php');
$con=conexion();

$sql="SELECT * from perfil";
$query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Perfil</title>
</head>
<header align="center">
    <h1>Datos de la tabla perfil</h1>
</header>

<body>
    <div>
        <form action="insertarPerfil.php" method="POST">
            <h2>Crear Perfil</h2>
            <div class="form-group">
    <input type="text" class="form-control"  name="perfil" placeholder="Perfil">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="descripcion" placeholder="Breve descripcio">
  </div>
            <input type="submit" class="btn btn-info" value="Agregar Perfil">
        </form>
    </div>
    <div>
    <table class="table table-striped"
        <h2>Perfiles</h2>
        <thead class="thead-dark">
        <tr>
            <td scope="col">IDE del perfil</td>
            <td scope="col">Perfil</td>
            <td scope="col">Descripcion</td>
        </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)):
            ?>
            <tr>
          <th scope="row"><?= $row['idPerfil']?></th>
          <th scope="row"><?= $row['perfil']?></th>
          <th scope="row"><?= $row['descripcion']?></th>

          <th><a href="actualizarPerfil.php?idPerfil=<?= $row['idPerfil']?>">Editar</a></th>
          <th><a href="eliminarPerfil.php?idPerfil=<?= $row['idPerfil']?>">Eliminar</a></th>
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