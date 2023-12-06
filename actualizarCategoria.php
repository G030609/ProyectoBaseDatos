<?php
include('conexion.php');
$con=conexion();

$id_categoria=$_GET['id_categoria'];

$sql="SELECT * FROM categoria WHERE id_categoria='$id_categoria'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="categoria-forms">
        <form action="editarCategoria.php" method="POST">
          <h1>Editar Categoria</h1>
          <input type="hidden" name="id_categoria" value="<?=$row['id_categoria']?>">
          <input type="text" name="nombre_categoria" placeholder="Nombre de la categoria" value="<?=$row['nombre_categoria']?>">

          <input type="submit" value="Actualizar Categoria">
        </form>
    </div>
</body>
<style>
    .categoria-forms form input[type=submit]{
        border: none;
    padding: 12px 50px;
    text-decoration: none;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 5px;
    background-color: white; 
    color: black; 
    border: 2px solid #60a100;
    }
</style>
</html>