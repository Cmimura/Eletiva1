<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
    <h1>Exercício 14</h1>
    <form method="post">
    <div class="mb-3">
        <label for="palavra" class="form-label">Digite uma palavra</label>
        <input type="text" id="palavra" name="palavra" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
    $texto = $_POST["palavra"];
    function palindromo(string $texto) {
        $invertido = strrev($texto);
        if ($texto == $invertido) {
            return "É um palíndromo";
        } else {
            return "Não é um palíndromo";
        }

    }
    echo palindromo($texto);
?>
</body>
</html>