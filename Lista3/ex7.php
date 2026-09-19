<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício 7</h1>
    <form method="post">
    <div class="mb-3">
        <label for="palavra" class="form-label">Digite uma palavra</label>
        <input type="text" id="palavra" name="palavra" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
    $texto = $_POST["palavra"];
    $invertido = strrev($texto);
    echo "<p>Palavra normal: $texto</p>";
    echo "<p>Palavra invertida: $invertido</p>";
?>
</body>
</html>