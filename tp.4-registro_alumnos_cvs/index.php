<?php 
include 'bootstrap.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registrar.php">
       <!--  Ingrese nombre: <input type="text" name="nombre" required><br>
        Ingrese apellido: <input type="text" name="apellido" required><br>
        Ingrese edad: <input type="number" name="edad" required><br>
        Ingrese DNI: <input type="number" name="dni" required><br>
        Ingrese email: <input type="email" name="email" required><br>
        <input type="submit" value="Registrar" > -->
        
        <!-- Nombre y apellido -->
        <div class="row">
        <div class="col">
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Apellido" name="apellido" required> 
        </div>
        </div>

        <!-- edad -->
        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default"> Ingrese edad: </span>
        <input type="number" min="5" class="form-control" name="edad" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <!-- DNI -->
        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Ingrese DNI:</span>
        <input type="number" min="45000000" class="form-control" name="dni" aria-describedby="inputGroup-sizing-default" required>
        </div>
        
        <!-- Email -->
        <div class="input-group">
        <span class="input-group-text" id="visible-addon">@</span>
        <input type="text" class="form-control" placeholder="Ingrese email" name="email" aria-describedby="visible-addon" required>
        <input type="text" class="form-control d-none" placeholder="Hidden input" aria-label="Hidden input" aria-describedby="visible-addon">
        </div>

        <br>

        <input class="btn btn-primary" type="submit" value="Registrar">

    </form>
    
</body>
</html>