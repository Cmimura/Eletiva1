<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 8</title>
</head>
<body> 
<h1>Exercício 8</h1>
<form method="post">
<div class="mb-3">
              <label for="raio" class="form-label">Digite o raio do circulo</label>
              <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $raio = $_POST["raio"] ?? 0;
    $area = 3.14 * ($raio * $raio);
    echo "<p>A área do circulo é $area</p>";
?>
</body>
</html>