<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 13</title>
</head>
<body> 
<h1>Exercício 13</h1>
<form method="post">
<div class="mb-3">
              <label for="num1" class="form-label">Digite o valor em kilometros</label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $num1 = $_POST["num1"] ?? 0;
    $milhas = $num1 / 1.6;
    echo "<p>A conversão de $num1 kilometros em milhas é: $milhas</p>";
?>
</body>
</html>