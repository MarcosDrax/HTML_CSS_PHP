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
                $v = isset($_GET["val"])?$_GET["val"]:1;
                    echo "<h1>Calculando o Fatorial de $v <h1>";

                $c = $v;
                $fat = 1;
                    do {
                        $fat = $fat*$c;
                        $c--;
                    } while ($c >= 1);
                    echo "<h2>O valor fatorial de $v != $fat.<h2>";
                ?>
        </main> 
        <a href="javascript:history.go(-1)" class="botão">Voltar</a>  
    </div>
</body>
</html>