<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 6</title>
</head>
<body> 
<h1>Exercício 6</h1>
<form method="post">
<div class="mb-3">
              <label for="temp" class="form-label">Digite a temperatura em graus Fahrenheit</label>
              <input type="number" id="temp" name="temp" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $temp = $_POST["temp"] ?? 0;
    $cel = ($temp - 32) / 1.8;
    echo "<p>A conversão de $temp fahrenheit para celsius é: $cel</p>";
?>
</body>
</html>