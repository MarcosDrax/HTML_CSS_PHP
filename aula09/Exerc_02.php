<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $a =  isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Voce nasceu em $a e terá $i anos.</br>";
            
            // condição criada para verificar a idade se o usuario for maior de 18 de anos
            if ($i >= 18) {
                $v = "já pode votar";
                $d = "já pode dirigir";
            } else {
                $v = "não pode votar";
                $d = "não pode dirigir";
                $cm = "não aprovado";
            }

            echo "Com essa idade voce $v e também $d. </br>";

            // condição criada para verificar se a idade do usuário for menor de 16 de anos ele não poderá votar, mas ele tiver a idade entre 16 e 18 anos o voto dele será opcional e acim a de 18 anos vot obrigatório.
            if ($i < 16) {
                $tipoVoto = "não vota";
            } else if (($i >= 16 && $i < 18) || ($i >= 65)) {
                    $tipoVoto = "voto opcional";
                } else {
                    $tipoVoto = "o voto é obrigatório";
                }
                if ( $i >= 70 ) {
                    $tipoVoto = "o voto não é obrigátorio";
                }
            echo "Para sua essa idade, $tipoVoto";
        ?>
    </div>
</body>
</html>