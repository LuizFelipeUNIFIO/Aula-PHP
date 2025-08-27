<?php
    echo "<h1>Números múltiplos de 5 entre 0 e 50:</h1>";
    $contador = 0;
    while ($contador <= 50) {
        if ($contador % 5 == 0) {
            echo $contador . "<br>";
            $contador++;
        } else {
            $contador++;
            continue;
        }
    }

    echo "<h1>Array Associativo de Produtos</h1>";

    $arrayAssoc = [
        "Tomate" => 3.99,
        "Cebola" => 2.49,
        "Alface" => 1.99,
        "Cenoura" => 2.79,
        "Batata" => 4.59
    ];

    foreach ($arrayAssoc as $chave => $valor) {
        echo "O preço do(a) $chave é R$ $valor <br>";
    }

    $valortotal = 0;

    foreach ($arrayAssoc as $chave => $valor) {
        $valortotal += $valor;
    }

    echo "<h2>O valor total da compra é R$ $valortotal</h2>";
?>