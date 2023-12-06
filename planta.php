<?php
include('conexion.php');
$con = conexion();

$sql = "SELECT * from planta";
$sql2 = "SELECT * from categoria";
$sql3 = "SELECT * from descubridor";
$sql4 = "SELECT * from informacionAdicional";
$sql5 = "SELECT * from habitatPlanta";

$query = mysqli_query($con, $sql);
$query2 = mysqli_query($con, $sql2);
$query3 = mysqli_query($con, $sql);

$query4 = mysqli_query($con, $sql3);
$query5 = mysqli_query($con, $sql4);
$query6 = mysqli_query($con, $sql5);
$query7 = mysqli_query($con, $sql);
$query8 = mysqli_query($con, $sql);
$query9= mysqli_query($con, $sql);

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
  <h1>Datos de la tabla Informacion Planta</h1>
</header>

<body>
  <div>
    <form action="insertarPlanta.php" method="POST">
      <h2>Agregar Planta</h2>
      <div class="form-group">
        <input type="text" class="form-control" name="nombre_planta" placeholder="Nombre de la planta">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="lugar_origen" placeholder="Lugar de origen">
      </div>
      <div class="mb-3">

        <select name="tipo_planta" class="form-control">
          <?php
          while ($row = mysqli_fetch_array($query3)) :
          ?>
            <?php
            while ($row2 = mysqli_fetch_array($query2)) :  ?>
              <?php if ($row['id_planta'] == $row2['tipo_planta']) ?>
              <option value="<?= $row['tipo_planta'] ?>"><?= $row2['id_categoria'] ?></option>
            <?php endwhile ?>
          <?php endwhile ?>
        </select>
      </div>
      <div class="mb-3">

        <select name="descubridor_planta" class="form-control">
          <?php
          while ($row = mysqli_fetch_array($query)) :
          ?>
            <?php
            while ($row2 = mysqli_fetch_array($query4)) :  ?>
              <?php if ($row['id_planta'] == $row2['descubridor_planta']) ?>
              <option value="<?= $row['descubridor_planta'] ?>"><?= $row2['id_descubridor'] ?></option>
            <?php endwhile ?>
          <?php endwhile ?>
        </select>
      </div>

      <div class="mb-3">
<select name="masInfo" class="form-control">
  <?php
  while ($row = mysqli_fetch_array($query7)) :
  ?>
    <?php
    while ($row2 = mysqli_fetch_array($query5)) :  ?>
      <?php if ($row['id_planta'] == $row2['masInfo']) ?>
      <option value="<?= $row['masInfo'] ?>"><?= $row2['idInfo'] ?></option>
    <?php endwhile ?>
  <?php endwhile ?>
</select>
</div>

<div class="mb-3">
<select name="habitat" class="form-control">
  <?php
  while ($row = mysqli_fetch_array($query8)) :
  ?>
    <?php
    while ($row2 = mysqli_fetch_array($query6)) :  ?>
      <?php if ($row['id_planta'] == $row2['habitat']) ?>
      <option value="<?= $row['habitat'] ?>"><?= $row2['idHabitat'] ?></option>
    <?php endwhile ?>
  <?php endwhile ?>
</select>
</div>

      <input type="submit" class="btn btn-info" value="Agregar Informacion">
    </form>
  </div>
  <div>
    <table class="table table-striped" <h2>Info</h2>
      <thead class="thead-dark">
        <tr>
          <td scope="col">IDE de Planta</td>
          <td scope="col">Nombre planta</td>
          <td scope="col">Descripcion </td>
          <td scope="col">Lugar Origen</td>
          <td scope="col">Tipo de planta</td>
          <td scope="col">Descubridor de planta</td>
          <td scope="col">Mas Informacion</td>
          <td scope="col">Habitat</td>

        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_array($query9)) :
        ?>
          <tr>
            <th scope="row"><?= $row['id_planta'] ?></th>
            <th scope="row"><?= $row['nombre_planta'] ?></th>
            <th scope="row"><?= $row['descripcion'] ?></th>
            <th scope="row"><?= $row['lugar_origen'] ?></th>
            <th scope="row"><?= $row['tipo_planta'] ?></th>
            <th scope="row"><?= $row['descubridor_planta'] ?></th>
            <th scope="row"><?= $row['masInfo'] ?></th>
            <th scope="row"><?= $row['habitat'] ?></th>

            <th><a href="actualizarPlanta.php?id_planta=<?= $row['id_planta'] ?>">Editar</a></th>
            <th><a href="eliminarPlanta.php?id_planta=<?= $row['id_planta'] ?>">Eliminar</a></th>
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