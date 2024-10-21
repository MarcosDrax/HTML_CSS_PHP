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
                $a = 1;
                while ($a <= 5) {
                    $v = "num".$a;
                    $url1 = "v".$a;
                    $$v = isset($_GET[$url1]) ? $_GET[$url1]:0;
                    $a++;
                }
                echo "$num1 $num2 $num3 $num4 $num5";
                /*$a = 1;
                while ($a <= 5) {
                    $v = "num".$a;
                    echo"valor $a : " . $$v ."<br>";
                }
                //$a++:*/
                ?>
                <input type="submit" value="Enviar" class="botao"/>
            </form>
        </main>        
    </div>
</body>
</html>