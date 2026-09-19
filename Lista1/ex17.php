<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 17</title>
</head>
<body> 
<h1>Exercício 17</h1>
<form method="post">
<div class="mb-3">
              <label for="capital" class="form-label">Digite o capital</label>
              <input type="number" id="capital" name="capital" class="form-control" required="">
            </div><div class="mb-3">
              <label for="taxa" class="form-label">Digite os taxa</label>
              <input type="number" id="taxa" name="taxa" class="form-control" required="">
            </div><div class="mb-3">
              <label for="periodo" class="form-label">Digite o período</label>
              <input type="number" id="periodo" name="periodo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $capital = $_POST["capital"] ?? 0;
    $taxa = $_POST["taxa"] ?? 0;
    $periodo = $_POST["periodo"] ?? 0;
    $jcompostos = ($capital * (1 + $taxa / 100) ** $periodo);
    echo "<p>Os resultados dos juros compostos são: $jcompostos</p>";
?>
</body>
</html>