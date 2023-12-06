<?php
require_once 'login2.php';
$conexion=  new mysqli($server,$user,$pass,$db); 
if(!$conexion) die("Fatal Error");

if(isset($_POST['delete']) && isset($_POST['id_descubridor'])){
    $id_descubridor= get_post($conexion,'id_descubridor');
    $query="DELETE FROM descubridor where id_descubridor='$id_descubridor'";
    $result=$conexion->query($query);
    if(!$result) echo "DELETE failed<br><br>";
}
if( isset($_POST['id_descubridor']) &&
isset($_POST['nombre_descubridor']) &&
isset($_POST['apellido_paterno'])  
 ){

$nombre_descubridor = get_post($conexion,'nombre_descubridor');
$apellido_paterno = get_post($conexion,'apellido_paterno');
$query="INSERT INTO descubridor VALUES" . "('$nombre_descubridor','$apellido_paterno')";
$result=$conexion->query($query);
if(!$result) echo "INSERT failed<br><br>";
}
echo <<<_END
<form action="sqltest.php" method="post"><pre>
Descubridor <input type="text" name="nombre_descubridor">
Apellido Del Descubridor <input type="text" name="apellido_paterno">
<input type="submit" value="AGREGAR">
</pre></form>
_END;

$query="SELECT * FROM descubridor";
$result=$conexion->query($query);
if(!$result) die("DATABASE ACCESS FAILED");

$rows=$result->num_rows;

for($j=0;$j<$rows;++$j){
  $row=$result->fetch_array(MYSQLI_NUM);

  $r0 = htmlspecialchars($row[0]); 
  $r1 = htmlspecialchars($row[1]); 
  $r2 = htmlspecialchars($row[2]); 


  echo <<<_END
 <pre>
 Ide Descubridor  $r0
 Descubridor $r1
 Apellido  $r2
 </pre>

 <form action='sqltest.php' method='post'>
 <input type='hidden' name='delete' value='yes'>
 <input type='hidden' name='id_descubridor' value='$r0'>
 <input type='submit' value='Eliminar'></form>
 _END;

}
$result->close();
$conexion->close();

function get_post($conexion,$var){
  return $conexion->real_escape_string($_POST[$var]);
}

?>