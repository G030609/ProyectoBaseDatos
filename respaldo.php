<?php
$db_host='localhost:3307';
$db_name='plantas';
$db_user='root';
$db_pass='';

$fecha=date("Ymd-His");

$salida_sql=$db_name.'_'.$fecha.'.sql';
$dump="mysqldump -h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";

system($dump,$output);

$zip=new ZipArchive();

$salida_zip =$db_name.'_'.$fecha.'.zip';

if($zip->open($salida_sql,ZIPARCHIVE::CREATE)==true){

    $zip->addFile($salida_sql);
    $zip->close();
}
?>
