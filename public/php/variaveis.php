<?php
    $nome = "Luiz Felipe";
    $idade = "18";
    $cidade = "Cambará"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis no HTML</title>
</head>
<body>
    <h1>Perfil do Usuário</h1>
    <p>Nome: <?php echo ($nome)?></p>
    <p>Idade: <?php echo ($idade)?></p>
    <p>Cidade: <?php echo ($cidade)?></p>
</body>
</html>