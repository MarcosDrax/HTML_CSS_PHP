<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <main>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $vlr1  = $_GET["val1"];
                $vlr2  = $_GET["val2"];

                $tabu = isset($_GET["val1"])?$_GET["val2"]:1;
                    echo "<h1>Calculadora <h1>";
                $cont = 1;
                    do {
                        $mult = $vlr1 * $vlr2;
                        $adicao = $vlr1 + $vlr2;
                        $subtr = $vlr1 - $vlr2;
                        $raiz1 = sqrt($vlr1) * 
                        $raiz2 = sqrt($vlr2);
                        $divid = $vlr1 / $vlr2;

                        echo "<h2>Resultado da Soma = $adicao.<h2>";
                        echo "<h2>Resultado da Subtração = $subtr.<h2>";
                        echo "<h2>Resultado da Divisão = $divid.<h2>";
                        echo "<h2>Resultado da Multiplicação = $mult.<h2>";
                        echo "<h2>Resultado da Raiz da Quadrada dos Valores declarados = $raiz1 e $raiz2<h2>";
                        $cont++;
                    } while ($cont <= 1);
                }
                ?>
        <a href="javascript:history.go(-1)" class="botão">Voltar</a>
        </main>   
    </div>
</body>
</html> 