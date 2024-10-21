<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Operações Aritmeticas</title>
</head>
<body>
    <div>
        <?php 
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $m = ($n1 + $n2) / 2;
            echo "<h2>Valores de: $n1 e $n2 </h2> ";
            echo "A soma entre $n1 e $n2 é " .($n1+$n2) ;
            echo "<br>A subtração entre $n1 e $n2 é " .($n1-$n2) ;
            echo "<br>A multiplicação entre $n1 e $n2 é " .($n1*$n2) ;
            echo "<br>A divisão entre $n1 e $n2 é " .($n1/$n2) ;
            echo "<br>O modulo entre $n1 e $n2 (resto)vale " .($n1%$n2) ;
            echo "<br>A media mostrada entre as notas $n1 e $n2 e $m ."
        ?>
    </div>
</body>
</html>ss