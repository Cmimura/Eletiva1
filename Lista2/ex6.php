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
              <label for="num1" class="form-label">Digite um número</label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $num1 = $_POST["num1"] ?? 0;
    $i = 1;
    $soma = 0;
    while ($i <= $num1) { 
        $soma = $soma + $i;
        $i += 1;
    }
    echo $soma;
?>
</body>
</html>