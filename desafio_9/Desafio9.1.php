<?php
    $media1 = $_POST['media1'] ?? '';
    $peso1  = $_POST['peso1'] ?? '';
    $media2 = $_POST['media2'] ?? '';
    $peso2  = $_POST['peso2'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio  Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <main>
            <h1>Médias Aritméticas</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="inum">1 Valor</label>
                <input type="number" name="media1" id="inum1" required value="<?=$media1?>">
                <label for="inum">1 Peso</label>
                <input type="number" name="peso1" id="inum2" required value="<?=$peso1?>">
                <label for="inum">2 Valor</label>
                <input type="number" name="media2" id="inum3" required value="<?=$media2?>">                
                <label for="inum">2 Peso</label>
                <input type="number" name="peso2" id="inum4" required value="<?=$peso2?>">
                <input type="submit" value="Calcular Médias">
            </form>
        </main>

        <section id="resultado">
            <?php 
                $aritm = ($media1 + $media2) / 2;
                $ponde = ($media1 * $peso1 + $media2 * $peso2) / ($peso1 + $peso2);
            ?>
            <h2>Cálculo das Médias</h2>
               <p>Analisando os Valores <?=$media1?> e <?=$media2?>:</p>
               <ul>
                    <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong><?=number_format($aritm,2,',','.')?></strong>.</li>
                    <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <strong><?=number_format($ponde,2,',','.')?></strong>.</li>
               </ul>
        </section>
    </body>
</html>