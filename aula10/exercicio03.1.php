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
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $estadoEscolhido = $_POST["estado"];
            $regiao = "";

            // Utilizando switch para determinar a região
            switch ($estadoEscolhido) {
                case "Manaus":
                case "Boa Vista":
                case "Macapa":
                case "Belem":
                case "Palmas":
                case "Porto Velho":
                case "Rio Branco":
                    $regiao = "Norte";
                    break;
                case "Sao Luis":
                case "Teresina":
                case "Fortaleza":
                case "Natal":
                case "Recife":
                case "Joao Pessoa":
                case "Aracaju":
                case "Maceio":
                case "Salvador":
                    $regiao = "Nordeste";
                    break;
                case "Cuiaba":
                case "Campo Grande":
                case "Goiania":
                    $regiao = "Centro-Oeste";
                    break;
                case "Sao Paulo":
                case "Rio de Janeiro":
                case "Vitoria":
                case "Belo Horizonte":
                    $regiao = "Sudeste";
                    break;
                case "Curitiba":
                case "Porto Alegre":
                case "Florianopolis":
                    $regiao = "Sul";
                    break;
                default:
                    $regiao = "Estado não encontrado.";
                    break;
            }

            // Exibe o resultado
            if ($regiao !== "Estado não encontrado.") {
                echo "<h2>O estado de $estadoEscolhido pertence à região: $regiao</h2>";
            } else {
                echo "<h2>$regiao</h2>";
            }
        }
    ?>
    <a href="javascript:history.go(-1)" class="botão">Voltar</a>
    </div>
</body>
</html>
