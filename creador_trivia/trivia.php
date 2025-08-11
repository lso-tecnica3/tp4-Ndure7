<?php
$archivo = "trivias/" . $_GET['archivo'];
$csv = fopen($archivo, "r");

$titulo = fgetcsv($csv);
echo "<h1>Trivia: " . $titulo[0] . "</h1>";

echo "<form action='resultado.php'>";
echo "<input type='hidden' name='archivo' value='" . $_GET['archivo'] . "'>";

$contador = 1;
while ($linea = fgetcsv($csv)) {
    $pregunta = $linea[0];
    $r1 = $linea[1];
    $r2 = $linea[2];
    $r3 = $linea[3];


    echo "<h3>$contador. $pregunta</h3>";
    echo "<input type='radio' name='resp$contador' value='$r1' required> $r1 <br>";
    echo "<input type='radio' name='resp$contador' value='$r2'> $r2 <br>";
    echo "<input type='radio' name='resp$contador' value='$r3'> $r3 <br><br>";

    $contador++;
}

fclose($csv);

echo "<input type='submit' value='Enviar respuestas'>";
echo "</form>";