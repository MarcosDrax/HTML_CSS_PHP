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
            <form method="GET" action="exercicio02.php">
                <?php 
                $a = 1;
                while ($a <= 5) {
                    echo"<label for='num'>Valor $a: </label>
                    <input type='number' id='v$a' name='v$a' max='100' min='0' value='0'/><br/>";
                    $a++;
                }
                ?>
                <input type="submit" value="Enviar" class="botao"/>
            </form>
        </main>        
    </div>
</body>
</html>