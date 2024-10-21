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
            $site = "cursoemvideo";
            $$site = "cursoPHP";
            echo "$site";
            echo "<br>$cursoemvideo";

            $x = "abc";
            $$x= "def";
            echo "<br>O conteudo da variavel X e $x";
            echo "<br>A variavel criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html> 