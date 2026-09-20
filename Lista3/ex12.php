<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <h1>Exercício 12</h1>
    <form method="post">
    <button type="submit" class="btn btn-primary">Gerar senha</button>
    </form>
    <?php
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $senha = "";
        for ($i = 0; $i < 8; $i++) {
            $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        echo "Senha gerada: " . $senha;
    ?>


</body>
</html>
