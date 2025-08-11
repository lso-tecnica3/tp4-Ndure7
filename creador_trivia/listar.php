<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Catalogo de Trivias </title>
    <?php 
        include 'bootstrap.php';
        $archivos = scandir("trivias");
    ?>
</head>
<body>
    <div class="container text-center bg-danger-subtle text-white" 
    style="height: 100px;">
        <h1> Catalogo de Trivias </h1>
    </div>
    
    <div class="container">
        <div class="row">
            <?php
            for ($f = 2; $f < count($archivos); $f++){
                $arc = $archivos[$f];
                $nombre= str_replace(".csv","",$arc);
                print "<div class='col-sm-6 col-md-6 col-lg-4 bg-info-subtle p-5' >";
                print "<div class='card h-100'>";
                print "<div class='card-body'>";
                print "<h5 class='card-title'>" . $nombre. "</h5>";
                print "<h6 class='card-subtitle mb-2 text-muted'>" . "<a href='trivia.php?archivo={$archivos[$f]}'> {$archivos[$f]} </a>" . "</h6>";
                print "<p class='card-text'>". 'Ingrese al link para jugar la trivia de ' . $nombre . "</p>";
                print "</div>";
                print "</div>";
                print "</div>";
            };
            ?>
        </div>
    </div>
</body>
</html>