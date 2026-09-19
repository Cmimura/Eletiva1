<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <h1>Exercício 11</h1>
    <form method="post">
    <div class="mb-3">
        <label for="valor" class="form-label">Digite o valor</label>
        <input type="float" id="valor" name="valor" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
    $valor = $_POST["valor"];
    $formatado = 'R$ ' . number_format($valor, 2, ',', '.');
    echo $formatado;
?>
</body>
</html>