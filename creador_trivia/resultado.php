<?php
$archivo = "trivias/" . $_GET['archivo'];
$csv = fopen($archivo, "r");

$titulo = fgetcsv($csv);
print "<h2>Resultados de la trivia: " . $titulo[0] . "</h2><hr>";

$correctas = 0;
$contador = 1;

while ($linea = fgetcsv($csv)) {
    $pregunta = $linea[0];
    $r1 = $linea[1];
    $r2 = $linea[2];
    $r3 = $linea[3];
    $correcta = $linea[4];

    $respuesta_usuario = $_GET['resp' . $contador];

    print "<p>$contador. $pregunta<br>";
    print "Tu respuesta: $respuesta_usuario<br>";
    print "Respuesta correcta: $correcta</p><hr>";

    if ($respuesta_usuario == $correcta) {
        $correctas++;
    }

    $contador++;
}

$total = $contador - 1;
print "<h3>Tu puntaje: $correctas de $total</h3>";

fclose($csv);