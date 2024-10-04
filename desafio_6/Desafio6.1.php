
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <?php 
        $dividendo = $_POST["dividendo"] ?? 0;
        $divisor = $_POST["divisor"] ?? 1;
        ?> 
        <main>
            <h1>Anatomia de uma Divisão</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="dividendo">Dividendo:</label>
                <input type="number" name="dividendo" id="dividendo" min="1" value="<?=$dividendo?>">
                <label for="divisor">Divisor:</label>
                <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">
                <input type="submit" value="Analisar">
            </form>
        </main>

        <section id="resultado">
            <h2>Estrutura da Divisão</h2>
                <?php 
                    if ($divisor == 0) {
                    echo "<p>Erro: Divisão por zero não é permitida.</p>";
                    } else {
                    $quociente = intdiv ($dividendo, $divisor); // ou utilizar esta logica de formatação "$quociente = (int) ($dividendo / divisor);"
                    $resto = $dividendo % $divisor;
                    }
                ?>
                <table class="divisao">
                    <tr>
                        <td><?=$dividendo?></td>
                        <td><?=$divisor?></td>
                    </tr>
                    <tr>
                        <td><?=$quociente?></td>
                        <td><?=$resto?></td>
                    </tr>
                </table>
        </section>
    </body>
</html>