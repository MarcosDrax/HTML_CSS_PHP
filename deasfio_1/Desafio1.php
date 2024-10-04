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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
        $numb = (int)$_GET["numero"]; 
        $sucessor   = $numb + 1;
        $antecessor = $numb - 1;
            echo"<p>O número escolhido foi <strong>$numb</strong></p>";
            echo"<p>O seu antecessor é <strong>$antecessor</strong></p>";
            echo"<p>O seu sucessor é <strong>$sucessor</strong></p>";
        ?>
        <p><button onclick="javascript:window. location.href='Desafio_1.html'">&#x2B05;Voltar</button></p>
    </main>
</body>
</html>