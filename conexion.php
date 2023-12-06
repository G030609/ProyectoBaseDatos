<?php
function conexion()
{
    $server = "localhost:3307";
    $user = "root";
    $pass = "";
    $db = "plantas";

    $conexion = mysqli_connect($server, $user, $pass);
    mysqli_select_db($conexion,$db);

  return $conexion;
}
?>
