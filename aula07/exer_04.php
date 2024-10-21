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
    $ano = $_GET["an"];
    $idade = 2014 - $ano;

    $tipo = ($idade>=18 && $idade<65) ? "OBRIGÁTORIO":"NÃO OBRIGATÓRIO";
    echo "Quem nasceu em $ano tem idade de $idade anos, seu voto é $tipo ";
        ?>
    </div>
</body>
</html> 