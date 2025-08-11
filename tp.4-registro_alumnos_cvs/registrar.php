<?php
    $nombre = filter_input(INPUT_GET,"nombre",FILTER_SANITIZE_SPECIAL_CHARS);
    $apellido = filter_input(INPUT_GET,"apellido",FILTER_SANITIZE_SPECIAL_CHARS);
    $edad = filter_input(INPUT_GET,"edad",FILTER_VALIDATE_INT);
    $dni = filter_input(INPUT_GET,"dni",FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
   
$archivo = "alumnos.csv";
$id = 1;

if(file_exists($archivo)){
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if(count($lineas) > 1){
        $ultima_linea = end($lineas);
        $campos = str_getcsv($ultima_linea); 
        if(is_numeric($campos[0])){
            $id = $campos[0] + 1;
        }
    }
}

$fecha_hora = date("Y-m-d H:i:s");
$nro_archivo = fopen($archivo,"a");


if(filesize($archivo) == 0){
    fwrite($nro_archivo,"id_preinscripcion,nombre,apellido,edad,dni,email,fecha_hora\n");
}

fwrite($nro_archivo, $id . "," . $nombre . "," . $apellido . "," . $edad . "," . $dni . "," . $email . "," . $fecha_hora . "\n");
fclose($nro_archivo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Datos ingresados:</p>
    <ul>
        <li>Nombre: <?php print $nombre; ?></li>
        <li>Apellido: <?php print $apellido; ?></li>
        <li>Edad: <?php print $edad; ?></li>
        <li>DNI: <?php print $dni; ?></li>
        <li>Email: <?php print $email; ?></li>
        <li>Fecha y hora: <?php print $fecha_hora; ?></li>
    </ul>
    <p style="color:green;">Preinscripcion realizada con exito, su numero de orden es <?php print $id; ?></p>
    <form action="index.php">
        <input type="submit" value="Volver a ingresar datos">
    </form>
</body>
</html>