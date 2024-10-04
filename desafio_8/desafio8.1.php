<?php
            $calc_raiz = $_POST['numero'] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>

        <main>
            <h1>Informe Um Número</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="inum">Número</label>
                <input type="number" name="numero" id="inum" value="<?=$calc_raiz?>">
                <input type="submit" value="Calcular Raízes">
            </form>
        </main>

        <section id="resultado">
            <h2>Resultado Final</h2>
                <?php
                    if ($calc_raiz == 0) {
                        echo "<p>Insira o Valor para Cálculo.</p>";
                        } else {
                        $raiz_Quadrada = sqrt($calc_raiz);
                        //$raiz_Quadrada = $calc_raiz**(1/2);
                        $raiz_Cubica   = $calc_raiz**(1/3);
                        echo"Analisando o <strong>número $calc_raiz</strong> , temos:";
                        echo"<ul><li><p>A sua raiz quadrada é <strong>". number_format($raiz_Quadrada, 3, ',', '.') . "</strong></p></li>";
                        echo"<li><p>A sua raiz cúbica é <strong>". number_format($raiz_Cubica, 3, ',', '.') . "</strong></p></li></ul>";
                    }
                ?>
        </section>

    </body>
</html>