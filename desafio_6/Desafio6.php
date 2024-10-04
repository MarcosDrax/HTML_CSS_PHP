<?php 
    $divisor1 = $_POST["divisor1"] ?? 0;
    $divisor2 = $_POST["divisor2"] ?? 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
 
        <main>
            <h1>Anatomia de uma Divisão</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="divisor1">Dividendo:</label>
                <input type="number" name="divisor1" id="divisor1" value="<?=$divisor1?>">
                <label for="divisor2">Divisor:</label>
                <input type="number" name="divisor2" id="divisor2" value="<?=$divisor2?>">
                <input type="submit" value="Analisar">
            </form>
        </main>

        <section id="resultado">
            <h2>Estrutura da Divisão</h2>
                <?php 
                    if ($divisor2 == 0) {
                    echo "<p>Erro: Divisão por zero não é permitida.</p>";
                    } else {
                    $quociente = number_format($divisor1 / $divisor2,0,',','.');
                    $divid2 = ($quociente * $divisor2);
                    $resto = number_format($divid2 - $divisor1,0,',','.');
                    echo"<table>";
                    echo"<tr>";
                    echo"<td> $divisor1</td>";
                    echo"<td>$divisor2</td>";
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td>$quociente </td>";
                    echo"<td>$resto</td>";
                    echo"</tr>";
                    echo"<table>";
                    }
                ?>
        </section>
    </body>
</html>