<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 5</title>
</head>
<body> 
<h1>Exercício 5</h1>
<form method="post">
<div class="mb-3">
              <label for="temp" class="form-label">Digite a temperatura em graus Celsius</label>
              <input type="number" id="temp" name="temp" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $temp = $_POST["temp"] ?? 0;
    $fah = $temp * 1.8 + 32;
    echo "<p>A conversão de $temp celsius para fahrenheit é: $fah</p>";
?>
</body>
</html>