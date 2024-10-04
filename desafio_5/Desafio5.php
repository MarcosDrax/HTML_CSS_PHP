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
        <h1>Analisador de Numero Real</h1>
    </header>
    <main>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
            $numb = $_POST["numero"] ?? 0; 
            $inteirA     = floor($numb); //serve para arredondar um número para baixo, ou seja, para o menor inteiro menor ou igual ao número original.
            $inteirA_ceil = ceil($numb);
            $Fracionaria = $numb - $inteirA;
            
            $inteirA = number_format($inteirA, 0, ',', '.');
            $Fracionaria = number_format($Fracionaria, 4, ',', '.');

                echo"<ul><li><p>Analisando o Número <strong>" . number_format($numb,3,',','.')."</strong> informado pelo Usuário</p></li>";
                echo"<li><p>Analisando o Número <strong>" . $inteirA_ceil ."</strong> informado pelo Usuário, este o valor para arredondamento para cima.</p></li>";
                echo"<li><p>A parte inteira do numero é <strong>$inteirA</strong></p></li>";
                echo"<li><p>A parte fracionária do número e <strong>$Fracionaria</strong></p></li></ul>";
        }
        ?>
        <p><button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button></p>
    </main>
</body>
</html>