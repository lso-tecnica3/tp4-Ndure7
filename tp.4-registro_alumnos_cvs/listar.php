<?php
$archivo = "alumnos.csv";
$nro_archivo = fopen($archivo,"r");
while(!feof($nro_archivo)){
    $linea = fgets($nro_archivo);
    print $linea . "<br>";
}
fclose($nro_archivo);
?>

