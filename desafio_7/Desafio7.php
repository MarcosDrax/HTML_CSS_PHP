<?php
    $salario = $_POST['salario'] ?? 0;
    $minimo = 1412;
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
                    if ($salario == 0) {
                    echo "<p>Aguardando Valores.</p>";
                    } else {
                    $totalsalario = (int) ($salario / $minimo);
                    $diferenca    = $salario % $minimo;
                    echo"<p>Quem recebe o salário de R$" .number_format($salario, 2,",",".")." ganha $totalsalario salários minímos + <strong> R$ $diferenca</strong></p>";
                    }
                ?>
        </section>
    </body>
</html>