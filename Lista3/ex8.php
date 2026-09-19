<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <h1>Exercício 8</h1>
    <form method="post">
    <div class="mb-3">
        <label for="palavra" class="form-label">Digite uma palavra</label>
        <input type="text" id="palavra" name="palavra" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
    $texto = $_POST["palavra"];
    function contarVogais($texto) {
    $texto = strtolower($texto);
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $contador++;
        }
    }
    
    return $contador;
}
    echo "<p>O número de vogais é: " . contarVogais($texto) . "</p>"
?>
</body>
</html>