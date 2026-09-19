<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 9</title>
</head>
<body> 
<h1>Exercício 9</h1>
<form method="post">
<div class="mb-3">
              <label for="alt" class="form-label">Digite a altura do retângulo</label>
              <input type="number" id="alt" name="alt" class="form-control" required="">
            </div><div class="mb-3">
              <label for="lar" class="form-label">Digite a largura do retângulo</label>
              <input type="number" id="lar" name="lar" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $alt = $_POST["alt"] ?? 0;
    $lar = $_POST["lar"] ?? 0;
    $perimetro = 2 * ($alt + $lar);
    echo "<p>O perímetro do retângulo é: $perimetro</p>";
?>
</body>
</html>