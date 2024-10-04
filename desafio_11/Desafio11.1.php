<?php
    $precoProd = $_POST['produto'] ?? 0;
    $juros  = $_POST['percent'] ?? 0;
    
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
                <input type="number" name="produto" id="iprod"  min="0.10" step="0.01" value="<?=$precoProd?>">

                <label for="percent">Qual será o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label>
                
                <input type="range" name="percent" id="percent" min="0" max="100" step="1" oninput="mudaValor()"   value="<?=$juros?>">

                <input type="submit" value="Reajustar"> 
            </form>
        </main>

        <section id="resultado">
            <h2>Resultado do Reajuste</h2>
                <?php
                    if (($juros == 0) and ($precoProd == 0 )) {
                        echo "Digite o Valor do Produto para ser Calculado";
                    } else {
                    $precoAtl = $precoProd +($precoProd * ($juros/100));
                    echo"<p>O produto que custava R$" .number_format($precoProd,2,',','.'). " , com <strong>$juros% de aumento</strong> vai passar a custar <strong>R$ " . number_format($precoAtl,2,',','.')."</strong> a partir de agora.</p>";
                }
                ?>
        </section>
            <script>
                //Declarações automáticas
                mudaValor()
                function mudaValor(){
                    p.innerText = percent.value;
                }
            </script>
    </body>
</html>