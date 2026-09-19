<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 1</title>
</head>
<body> 
<h1>Exercício 1</h1>
<form method="post">
<div class="mb-3">
              <label for="num1" class="form-label">Digite o primeiro número</label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="num2" class="form-label">Digite o segundo número</label>
              <input type="number" id="num2" name="num2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $num1 = $_POST["num1"] ?? 0;
    $num2 = $_POST["num2"] ?? 0;
    $soma = $num1 + $num2;
    echo "<p>A soma dos números é: $soma</p>";
?>
</body>
</html>