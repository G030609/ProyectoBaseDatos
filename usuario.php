<?php
include('conexion.php');
$con=conexion();

$sql="SELECT * from usuario";

$sql2="SELECT * from perfil";
$query=mysqli_query($con,$sql);
$query2=mysqli_query($con,$sql2);
$query3=mysqli_query($con,$sql);

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
    <h1>Datos de la tabla Usuario</h1>
</header>

<body>
    <div>
        <form action="insertarUsuario.php" method="POST">
            <h2>Crear Usuario</h2>
            <div class="form-group">
    <input type="text" class="form-control"  name="nombreUsuario" placeholder="Nombre del usuario">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="contraseña" placeholder="Contraseña">
  </div>

  <div class="mb-3">
<select name="perfilUsuario" class="form-control">
  <?php
  while ($row = mysqli_fetch_array($query3)) :
  ?>
    <?php
    while ($row2 = mysqli_fetch_array($query2)) :  ?>
      <?php if ($row['idUsuario'] == $row2['perfilUsuario']) ?>
      <option value="<?= $row['perfilUsuario'] ?>"><?= $row2['idPerfil'] ?></option>
    <?php endwhile ?>
  <?php endwhile ?>
</select>
</div>
            <input type="submit" class="btn btn-info" value="Agregar Usuario">
        </form>
    </div>
    <div>
    <table class="table table-striped"
        <h2>Descubridores</h2>
        <thead class="thead-dark">
        <tr>
            <td scope="col">IDE del usuario</td>
            <td scope="col">Nombre de usuario</td>
            <td scope="col">Contraseña</td>
            <td scope="col"> Perfil relacionado</td>
        </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)):
            ?>
            <tr>
          <th scope="row"><?= $row['idUsuario']?></th>
          <th scope="row"><?= $row['nombreUsuario']?></th>
          <th scope="row"><?= $row['contraseña']?></th>
          <th scope="row"><?= $row['perfilUsuario']?></th>

          <th><a href="actualizarUsuario.php?idUsuario=<?= $row['idUsuario']?>">Editar</a></th>
          <th><a href="eliminarUsuario.php?idUsuario=<?= $row['idUsuario']?>">Eliminar</a></th>
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