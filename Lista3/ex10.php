<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <h1>Exercício 10</h1>
    <form method="post">
    <div class="mb-3">
        <label for="palavra" class="form-label">Digite seu nome completo</label>
        <input type="text" id="palavra" name="palavra" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
    $texto = $_POST["palavra"];
    function PegarIniciais(string $texto)
    {
        $palavras = explode(" ", $texto);
        $inicias = [];
        foreach ($palavras as $palavra) {
            if (!empty($palavra)) {
                $inicias[] = mb_strtoupper(mb_substr($palavra, 0, 1));
            }
        }
            return implode(".", $inicias);
    }
    echo PegarIniciais($texto);
?>
</body>
</html>