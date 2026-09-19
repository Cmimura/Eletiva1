<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 18</title>
</head>
<body> 
<h1>Exercício 18</h1>
<form method="post">
<div class="mb-3">
              <label for="dias" class="form-label">Digite a quantidade de dias</label>
              <input type="number" id="dias" name="dias" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $dias = $_POST["dias"] ?? 0;
    $horas = $dias * 24;
    $minutos = $dias * 1440;
    $segundos = $dias * 86400;
    echo "<p>O resultado dos dias em horas é $horas, em minutos é $minutos e em segundos é $segundos</p>";
?>
</body>
</html>