<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php 
            $d = isset($_GET["ds"])?$_GET["ds"]:0;
           
            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo"A Semana esta apenas começando!!!! :)</br>";
                    echo"Levanta e bora estudar Marcos!!!! :)";
                    break;
                case 8:
                case 7:
                    echo"Vai Descansar pequeno ganhafoto!!!! ;)";
                    break;
                default:
                    echo"Dia da Semana Invalido";         
            }
        ?>
        <a href="javascript:history.go(-1)" class="botão">Voltar</a>
    </div>
</body>
</html>