<?php
$nombre = $_GET['nombre'];
$nro_archivo = fopen("trivias/$nombre.csv", "w");
fputcsv($nro_archivo,[$nombre]);
    for ($x = 0; $x < 5; $x++) {
        
        $pregunta = $_GET['p' . ($x + 1)];
        $r1 = $_GET['r1' . ($x + 1)];
        $r2 = $_GET['r2' . ($x + 1)];
        $r3 = $_GET['r3' . ($x + 1)];
        $rc = $_GET['rc' . ($x + 1)];
        fputcsv($nro_archivo, [$pregunta , $r1 , $r2 , $r3  , $rc]);
    }
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
    <form action="listar.php">
    Se registro la trivia! <br>
    Quiere ver las trivias?
    <input type="submit" value="Listar" >

    </form>
</body>
</html>