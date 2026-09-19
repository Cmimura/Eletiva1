<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <form method="post">
    <div class="mb-3">
        <label for="palavra" class="form-label">Digite uma palavra</label>
        <input type="text" id="palavra" name="palavra" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
    $texto = $_POST["palavra"];
    echo mb_strlen($texto, 'UTF-8');
?>
</body>
</html>