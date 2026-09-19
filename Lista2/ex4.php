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
              <label for="num1" class="form-label">Digite o número relacionado ao mês</label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    $num1 = $_POST["num1"] ?? 0;
    switch ($num1) {
        case 1:
            echo "<p>Janeiro</p>";
            break;
        case 2:
            echo "<p>Fevereiro</p>";
            break;
        case 3:
            echo "<p>Março</p>";
            break;
        case 4:
            echo "<p>Abril</p>";
            break;
        case 5:
            echo "<p>Maio/p>";
            break;
        case 6:
            echo "<p>Junho</p>";
            break;
        case 7:
            echo "<p>Julho</p>";
            break;
        case 8:
            echo "<p>Agosto</p>";
            break;
        case 9:
            echo "<p>Setembro</p>";
            break;
        case 10:
            echo "<p>Outubro</p>";
            break;
        case 11:
            echo "<p>Novembro</p>";
            break;
        case 12:
            echo "<p>Dezembro</p>";
            break;
    }
?>
</body>
</html>