<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 4</title>
</head>
<body> 
<h1>Exercício 4</h1>
<form method="post">
<div class="mb-3">
    <label for="num1" class="form-label">Digite o dia</label>
    <input type="number" id="dia" name="dia" class="form-control" required="">
</div><div class="mb-3">
    <label for="mes" class="form-label">Digite o mês</label>
    <input type="number" id="mes" name="mes" class="form-control" required="">
</div><div class="mb-3">
    <label for="ano" class="form-label">Digite o ano</label>
    <input type="number" id="ano" name="ano" class="form-control" required="">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $dia = $_POST["dia"] ?? 0;
    $mes = $_POST["mes"] ?? 0;
    $ano = $_POST["ano"] ?? 0;
    if (checkdate($mes, $dia, $ano))
    {
        echo "Data válida!";
        echo "<p>$dia/$mes/$ano</p>";
    } 
    else 
    {
        echo "Data inválida!";
    }
?>
</body>
</html>