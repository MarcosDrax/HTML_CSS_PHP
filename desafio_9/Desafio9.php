<?php
    $media1 = $_POST['media1'] ?? 0;
    $peso1  = $_POST['peso1'] ?? 0;
    $media2 = $_POST['media2'] ?? 0;
    $peso2  = $_POST['peso2'] ?? 0;
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
                <input type="number" name="media1" id="inum1" value="<?=$media1?>">
                <label for="inum">1 Peso</label>
                <input type="number" name="peso1" id="inum2" value="<?=$peso1?>">
                <label for="inum">2 Valor</label>
                <input type="number" name="media2" id="inum3" value="<?=$media2?>">                
                <label for="inum">2 Peso</label>
                <input type="number" name="peso2" id="inum4" value="<?=$peso2?>">
                <input type="submit" value="Calcular Médias">
            </form>
        </main>

        <section id="resultado">
            <h2>Cálculo das Médias</h2>
                <?php
                    if (($media1 == 0) and ($media2 == 0) and ($peso1 == 0) and ($peso2 == 0)) {
                        echo "<p>Insira o Valor para Calculo.</p>";
                    } else {
                        $mediaSimples = number_format(($media1 + $media2)/2,2,',','.');
                        //Mp = [(N1 x P1) + (N2 x P2) + (N3 x P3) + (N4 x P4)] ÷ (P1 + P2 + P3 + P4)
                        $mediaPonderada = number_format((($media1 * $peso1) + ($media2 * $peso2)) / ($peso1 + $peso2), 2, ',', '.');
                        echo"Analisando os valores $media1 e $media2 temos:";
                        echo"<ul><li><p>A <strong>Média Aritmetica Simples</strong> entre os valores é igual a $mediaSimples</p></li>";
                        echo"<li><p>A <strong>Média Aritmetica Ponderada</strong> entre os valores é igual a $mediaPonderada</p></li></ul>";
                    }
                ?>
        </section>

    </body>
</html>