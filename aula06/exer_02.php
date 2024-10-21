<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php 
        /* esse exercicio pretende demonstrar o uso de operadores de incremento e decremento*/
            $atual = $_GET["aa"]; #essa linha vai pegar o ano na URL
            echo "O ano atual e $atual e ano anterior é " . --$atual;
        ?>
    </div>
</body>
</html> 