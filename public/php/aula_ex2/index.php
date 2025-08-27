<?php
    $nomeFilme = $_POST["nomeFilme"];
    $genenoFilme = $_POST["generoFilme"];
    $imagemCadastro = "./imagemCadastro.jpg";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Simples de Filme</title>
</title>
</head>
<body>
    <style>
        #imagemCadastro {
            width: 300px;
            margin-bottom: 50px;
        }
        #formulario {
            display: flex;
            flex-direction: column;
            width: 300px;
            gap: 10px;
            margin-bottom: 50px;
        }
    </style>
    <?php include "cabecalho.php";?>
    <main>
        <img src="<?php echo $imagemCadastro?>" alt="" id="imagemCadastro">
        <form action="./index.php" method="post" id="formulario">
            <input type="text" name="nomeFilme" id="">
            <input type="text" name="generoFilme" id="">
            <button>Enviar</button>
        </form>
        <p>Filme Cadastrado: <?php echo ($nomeFilme) , " (", ($genenoFilme), ")"?></p>
        <?php if($genenoFilme == "terror") {
            echo "<p>Gênero de filme que mais assusta as pessoas!</p>";
            } elseif($genenoFilme == "comédia") {
            echo "<p>Gênero de filme que mais diverte as pessoas!</p>";
            } elseif($genenoFilme == "ação") {
            echo "<p>Gênero de filme que mais empolga as pessoas!</p>";
            }   
        ?>
    </main>
    <?php include "rodape.php";?>
</body>
</html>