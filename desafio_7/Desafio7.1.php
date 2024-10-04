<?php
    $minimo = 1_412.20;
    $salario = $_POST['salario'] ?? $minimo;   
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <main>
            <h1>Informe Seu Salário</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="salario">Salário (R$)</label>
                <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
                <input type="submit" value="Analisar">
                <p>Considerando o Valor do Salário Minímo <strong>R$<?=number_format($minimo,2,",",".")?></strong></p>
            </form>
        </main>
        <section id="resultado">
            <h2>Resultado Final</h2>
                <?php
                    $totSal = intdiv($salario, $minimo);
                    $dif = $salario % $minimo;
                    echo"Quem recebe um salario de  R\$ ". number_format($salario, 2, "," ,".")." ganha <strong>$totSal salários minímos</strong> + R\$ ". number_format($dif, 2, "," ,".")."<p>";
                ?>
        </section>
    </body>
</html>