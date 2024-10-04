<!--- Script HTML - ini!--->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando Com Números Aleatórios</h1>
    </header>
    <section>
        <form action="Desafio2.php" method="get" autocomplete="on">
        <p>Gerando um Número Aleatório entre 0 e 100</p>

                    <main>
                        <!--- Script PHP - INI!--->
                        <?php 
                        $aleatorio = mt_rand(1,100); //função rand(1951) - linear congrenton Generator //A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
                        $aleatorio_1 = mt_rand(1,100);//mt_rand(1997) - Mersenne Twister
                        $aleatorio_2 = random_int(1,100);//random_int()gera números  aleatorios criptograficamente segura

                        $sucessor   = $aleatorio + 1;
                        $antecessor = $aleatorio - 1;
                            echo"<p>O número escolhido foi: <strong>$aleatorio</strong></p>";
                            echo"<p>O seu antecessor é: <strong>$antecessor</strong></p>";
                            echo"<p>O seu sucessor é: <strong>$sucessor</strong></p>";
                        ?>
                        <!--- Script PHP - FIM!--->
                    </main>
                    <input type="submit" value="GERAR NÚMERO ALEATÓRIO">
        </form>
    </section>
</body>
</html>