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
            <form method="GET" action="exercicio02.1.php">
                <?php 
                $c = 1;
                    do {
                       echo "$c ";
                       $c+=2;  
                    } while ($c <= 20);
                    echo "<br>";

                $d = 10;
                    do {
                        echo "$d ";
                        $d--;
                    } while ($d >= 1);
                ?>
                <input type="submit" value="Enviar" class="botao"/>
            </form>
        </main>        
    </div>
</body>
</html>