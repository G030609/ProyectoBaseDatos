<?php
$conexion = mysqli_connect('localhost:3307', 'root', '', 'plantas');
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
    <h1>Consulta relacional que muestra la planta, su categoria e informacion del descubridor</h1>
</header>

<body>
    <br>
    <table border="1" align="center" class="table">
        <tr>
            <td style="background-color: #57E307;">Nombre de la planta</td>
            <td style="background-color: #57E307;">Descripcion de la planta</td>
            <td style="background-color: #57E307;">Nombre de la categoria</td>
            <td style="background-color: #57E307;">Nombre del descubridor</td>
            <td style="background-color: #57E307;">Apellido del descubridor</td>
        </tr>
        <?php
        $sql = "SELECT p.nombre_planta,p.descripcion,c.nombre_categoria, d.nombre_descubridor,d.apellido_paterno from planta as p
        join categoria as c on id_planta=id_categoria
        join descubridor as d on id_planta=id_descubridor";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $mostrar['nombre_planta'] ?></td>
                <td><?php echo $mostrar['descripcion'] ?></td>
                <td><?php echo $mostrar['nombre_categoria'] ?></td>
                <td><?php echo $mostrar['nombre_descubridor'] ?></td>
                <td><?php echo $mostrar['apellido_paterno'] ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
    <div align="center">
    <a class="btn btn-primary" href="menu.html" role="button">Regresar</a>
    </div>
</body>
</html>