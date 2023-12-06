<?php
include('conexion.php');
$con=conexion();

$sql="SELECT * from infoUsuario";
$sql2="SELECT * from usuario";
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

    <title>Info</title>
</head>
<header align="center">
    <h1>Datos de la tabla Informacion Usuario</h1>
</header>

<body>
    <div>
        <form action="insertarInfoUsuario.php" method="POST">
            <h2>Agregar Usuario</h2>
            <div class="form-group">
    <input type="text" class="form-control"  name="nombre" placeholder="Nombre de usuario">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno">
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="cumple" placeholder="Fecha de cumpleaños">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="genero" placeholder="Indicar su genero">
  </div>
  <div class="mb-3">
                        
<select  name="usuarioM"class="form-control">
<?php
  while($row=mysqli_fetch_array($query3)):
  ?>
<?php
    while($row2=mysqli_fetch_array($query2)):  ?>
    <?php if($row['idInfoUsuario']==$row2['usuarioM']) ?>
  <option value="<?=$row['usuarioM'] ?>"><?=$row2['idUsuario'] ?></option>
 <?php endwhile ?>
 <?php endwhile ?>
    </select>
    </div>
            <input type="submit" class="btn btn-info" value="Agregar Informacion">
        </form>
    </div>
    <div>
    <table class="table table-striped"
        <h1>Info</h1>
        <thead class="thead-dark">
        <tr>
            <td scope="col">IDE de Info Usuario</td>
            <td scope="col">Nombre</td>
            <td scope="col">Apellido Paterno</td>
            <td scope="col">Apellido Materno</td>
            <td scope="col">Fecha de cumpleaños</td>
            <td scope="col">Genero</td>
            <td scope="col">Usuario Externo</td>
            
        </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)):
            ?>
            <tr>
          <th scope="row"><?= $row['idInfoUsuario']?></th>
          <th scope="row"><?= $row['nombre']?></th>
          <th scope="row"><?= $row['apellidoPaterno']?></th>
          <th scope="row"><?= $row['apellidoMaterno']?></th>
          <th scope="row"><?= $row['cumple']?></th>
          <th scope="row"><?= $row['genero']?></th>
          <th scope="row"><?= $row['usuarioM']?></th>

          <th><a href="actualizarInfoUsuario.php?idInfoUsuario=<?= $row['idInfoUsuario']?>">Editar</a></th>
          <th><a href="eliminarInfoUsuario.php?idInfoUsuario=<?= $row['idInfoUsuario']?>">Eliminar</a></th>
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