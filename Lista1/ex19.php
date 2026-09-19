<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 19</title>
</head>
<body> 
<h1>Exercício 19</h1>
<form method="post">
<div class="mb-3">
              <label for="dis" class="form-label">Digite a distância</label>
              <input type="number" id="dis" name="dis" class="form-control" required="">
            </div><div class="mb-3">
              <label for="temp" class="form-label">Digite o tempo</label>
              <input type="number" id="temp" name="temp" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $dis = $_POST["dis"] ?? 0;
    $temp = $_POST["temp"] ?? 1;
    $tmedio = $dis / $temp;
    echo "<p>A veloidade média é de: $tmedio km/h</p>";
?>
</body>
</html>