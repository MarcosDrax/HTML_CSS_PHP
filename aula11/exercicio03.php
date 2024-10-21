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
        <fieldset>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $inicio  = $_POST["inicio"];
                    $fim     = $_POST["fim"];
                    $cont    = $_POST["incremento"];
                        while ($inicio <= $fim) {
                            echo $inicio . "  " ;
                            $inicio+=$cont;
                        } 
                        while ($inicio >= $fim){
                            echo $inicio ."  " ;
                            $inicio-=$cont;
                        } 
                }
            ?>
        </fieldset>      
    </div>
    <a href="javascript:history.go(-1)" class="botão">Voltar</a>
</body>
</html>