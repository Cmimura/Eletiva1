<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <h1>Exercício 13</h1>
    <form method="post">
    <div class="mb-3">
        <label for="palavra" class="form-label">Digite seu nome completo</label>
        <input type="text" id="palavra" name="palavra" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
    $texto = $_POST["palavra"];
    function MaiorFrase(string $texto)
    {
        $palavras = str_word_count($texto, 1);
        $quantidade = str_word_count($texto);
        $maior = "";
        foreach ($palavras as $palavra) {
            if (strlen($palavra) > strlen($maior)) {
                    $maior = $palavra;
                }
        }
            return "Números de palavras: $quantidade Maior palavra: $maior";
    }
    echo MaiorFrase($texto);
?>
</body>
</html>