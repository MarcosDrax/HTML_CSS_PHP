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
                $tabu = isset($_GET["val"])?$_GET["val"]:1;
                    echo "<h1>Tabuada do $tabu <h1>";
                $cont = 1;
                    do {
                        $result = $cont * $tabu;
                        echo "<h2>$cont x $tabu = $result.<h2>";
                        $cont++;
                    } while ($cont <= 10);
                ?>
        <a href="javascript:history.go(-1)" class="botão">Voltar</a>
        </main>   
    </div>
</body>
</html> 