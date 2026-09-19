<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 14</title>
</head>
<body> 
<h1>Exercício 14</h1>
<form method="post">
<div class="mb-3">
              <label for="peso" class="form-label">Digite o seu peso</label>
              <input type="number" id="peso" name="peso" class="form-control" required="">
            </div><div class="mb-3">
              <label for="alt" class="form-label">Digite a sua altura</label>
              <input type="decimal" id="alt" name="alt" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $peso = $_POST["peso"] ?? 0;
    $alt = $_POST["alt"] ?? 0;
    $imc = $peso / ($alt ** 2);
    $result =  number_format($imc, 1, ',' , '.');
    echo "<p>O seu imc é: $result</p>";
?>
</body>
</html>