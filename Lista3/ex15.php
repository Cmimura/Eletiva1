<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <h1>Exercício 15</h1>
    <form method="post">
    <div class="mb-3">
        <label for="palavra" class="form-label">Digite seu nome completo</label>
        <input type="text" id="palavra" name="palavra" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
    $texto = $_POST["palavra"];
    function PegarDominio(string $texto)
    {
        $palavras = explode("@", $texto);
        $quantidade = count($palavras);
        $dominio = "";
        if ($quantidade > 1) {
            $dominio = $palavras[1];
            return $dominio;
        } else {
            return "<p>Digite um E-mail válido</p>";
        }
    }
    echo PegarDominio($texto);
?>
</body>
</html>