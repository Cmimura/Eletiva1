<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 3</title>
</head>
<body> 
<h1>Exercício 3</h1>
<form method="post">
<div class="mb-3">
              <label for="num1" class="form-label">Digite o primeiro número</label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $num1 = $_POST["num1"] ?? 0;
    if ($num1 > 100)
        {
            $num1 = $num1 - ($num1 * 0.15);
            echo "<p>Valor com desonto aplicado $num1</p>";
        }
    else
        {
            echo "<p>Valor sem desconto aplicado $num1</p>";
        }
?>
</body>
</html>