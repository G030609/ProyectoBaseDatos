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
    <h1>Vista que muestra la fecha de cumpleaños de los usuarios y sus nombres</h1>
</header>

<body>
    <br>
    <table border="1" align="center" class="table">
        <tr>
            <td style="background-color: #57E307;">Nombre del usuario</td>
            <td style="background-color: #57E307;">Fecha de cumpleaños</td>
            <td style="background-color: #57E307;">Nombre de usuarios</td>
          
        </tr>
        <?php
        $sql = "SELECT * FROM plantas.cumpl_usuarios;";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['cumple'] ?></td>
                <td><?php echo $mostrar['nombreUsuario'] ?></td>
            
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