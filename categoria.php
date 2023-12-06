<?php
include('conexion.php');
$con=conexion();

$sql="SELECT * from categoria";
$query=mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Categoria</title>
</head>

<body>
  <div>
    <form action="insertarCategoria.php" method="POST" >
        <h1>Crear Categoria</h1>
        <input type="text" name="nombre_categoria">

        <input type="submit" value="Agregar Categoria">
    </form>
  </div>
<div>
    <h2>Categorias</h2>
    <table class="table">
        <thead>
         <tr>
            <th scope="col">IDE categoria</th>
            <th scope="col">Categoria</th>
            <th colspan="2">Acciones</th>
            <th scope="col"></th>
         </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)):
            ?>
            <tr>
          <th><?= $row['id_categoria']?></th>
          <th><?= $row['nombre_categoria']?></th>

          <th><a href="actualizarCategoria.php?id_categoria=<?= $row['id_categoria']?>">Editar</a></th>
          <th><a href="eliminarCategoria.php?id_categoria=<?= $row['id_categoria']?>">Eliminar</a></th>
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