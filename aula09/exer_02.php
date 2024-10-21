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
        <h1>Formulario</h1>
        <form method="POST" autocomplete="on">
        <section>
            <?php 
                $ano = isset($_POST["ano"])?$_POST["ano"]:1900;
                $idade = date("Y") - $ano;
                echo"Voçe nasceu em $ano e terá $idade anos.</br>";
                if ($idade<16){
                    $tipoVoto = "não vota";
                } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)){
                    $tipoVoto = "Voto opcional";
                }else{
                    $tipoVoto = "Voto obrigatorio";
                }
                echo"Para esta idade, $tipoVoto.";
            ?>
        </section>
    </main>
</body>
</html>
