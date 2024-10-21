<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Aula 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Formulario de Cadastro</h1>
        <form method="POST" action="action02.php" autocomplete="on">
        <?php 
            $ano = isset($_POST["ano"])?$_POST["ano"]:1900;
            $idade = date("Y") - $ano;
            echo"Voçe nasceu em $ano e terá $idade anos.</br>";
            if($idade >= 18) {
                $v = "ja está apto há votar";
                $d = "já está apto há dirigir";
            } else {
                $v = "não está apto há votar";
                $d = "não está apto há dirigir";                
            }
            echo"Com essa idade voce $v e tambem $d.";
        ?>
    </main>
    <p><button onclick="javascript:window. location.href='exer_01.html'">&#x2B05;Voltar</button></p>
</body>
</html>
