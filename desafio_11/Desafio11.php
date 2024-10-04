<?php
    $precoProd = $_POST['produto'] ?? 0;
    $juros  = $_POST['atual'] ?? 0;
    
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>

        <main>
            <h1>Reajustador de Preço</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="iprod">Preço do Produto (R$)</label>
                <input type="number" name="produto" id="iprod" value="<?=$precoProd?>">
                <label for="percent">Qual será o percentual de reajuste?</label>
                <input type="range" name="atual" id="percent" min="0" max="100" value="<?=$juros?>">
                <span id="rangeValue"><?=$juros?></span>
                <input type="submit" value="Reajustar"> 
            </form>
        </main>

        <section id="resultado">
            <h2>Resultado do Reajuste</h2>
                <?php
                    if (($juros == 0) and ($precoProd == 0)) {
                        //echo "Digite o Valor do Produto para ser Calculado";
                    }
                    $precoAtl = $precoProd +($precoProd * ($juros/100));
                    echo"<p>O produto que custava R$" .number_format($precoProd,2,',','.'). " , com <strong>$juros% de aumento</strong> vai passar a custar <strong>R$ " . number_format($precoAtl,2,',','.')."</strong> a partir de agora.</p>";
                ?>
        </section>

    </body>
</html>