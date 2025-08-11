<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creador trivia</title>
    <?php include 'bootstrap.php'; ?>
</head>
<body>
    <center><h1>Creador de trivia</h1></center>
<form action="guardar.php">
    <!-- nombre trivia -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese nombre de su trivia</span>
    <input type="text" class="form-control" name="nombre" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <h5>Pregunta 1</h5>
    <!-- 1ra pregunta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese pregunta</span>
    <input type="text" class="form-control" name="p1" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!-- 1ra pregunta- 1ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese primer respuesta</span>
    <input type="text" class="form-control" name="r11" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!-- 1ra pregunta- 2da respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese segunda respuesta</span>
    <input type="text" class="form-control" name="r21" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!-- 1ra pregunta- 3ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese tercer respuesta</span>
    <input type="text" class="form-control" name="r31" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!-- 1ra pregunta- correcta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese la respuesta correcta</span>
    <input type="text" class="form-control" name="rc1" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <h5>Pregunta 2</h5>
    <!-- 2da pregunta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese segunda pregunta</span>
    <input type="text" class="form-control" name="p2" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--2da pregunta- 1ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese primer respuesta</span>
    <input type="text" class="form-control" name="r12" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--2da pregunta- 2da respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese respuesta</span>
    <input type="text" class="form-control" name="r22" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--2da pregunta- 3ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese tercer respuesta</span>
    <input type="text" class="form-control" name="r32" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--2da pregunta-correcta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese respuesta correcta</span>
    <input type="text" class="form-control" name="rc2" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <h5>Pregunta 3</h5>
    <!-- 3ra pregunta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese pregunta</span>
    <input type="text" class="form-control" name="p3" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--3ra pregunta- 1ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese primer respuesta</span>
    <input type="text" class="form-control" name="r13" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--3ra pregunta- 2da respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese segunda respuesta</span>
    <input type="text" class="form-control" name="r23" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--3ra pregunta- 3ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese tercer respuesta</span>
    <input type="text" class="form-control" name="r33" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--3ra pregunta-correcta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese respuesta correcta</span>
    <input type="text" class="form-control" name="rc3" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <h5>Pregunta 4</h5>
    <!-- 4ta pregunta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese pregunta</span>
    <input type="text" class="form-control" name="p4" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--4ta pregunta- 1ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese primer respuesta</span>
    <input type="text" class="form-control" name="r14" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--4ta pregunta- 2da respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese segunda respuesta</span>
    <input type="text" class="form-control" name="r24" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--4ta pregunta- 3ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese tercer respuesta</span>
    <input type="text" class="form-control" name="r34" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--4ta pregunta-correcta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese respuesta correcta</span>
    <input type="text" class="form-control" name="rc4" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <h5>Pregunta 5</h5>
    <!-- 5ta pregunta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese pregunta</span>
    <input type="text" class="form-control" name="p5" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--5ta pregunta- 1ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese primer respuesta</span>
    <input type="text" class="form-control" name="r15" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--5ta pregunta- 2da respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese segunda respuesta</span>
    <input type="text" class="form-control" name="r25" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--5ta pregunta- 3ra respuesta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese tercer respuesta</span>
    <input type="text" class="form-control" name="r35" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <!--5ta pregunta-correcta -->
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingrese respuesta correcta</span>
    <input type="text" class="form-control" name="rc5" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <p><input class="btn btn-primary" type="submit" value="Enviar">
</form>
</body>
</html>