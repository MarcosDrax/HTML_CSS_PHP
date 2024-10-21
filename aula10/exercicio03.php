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

            // Mapeia o estado para a região -  criando array para procura dos estados
            $estadoRegiao = ["Manaus" => "Norte", "Boa Vista" => "Norte", "Macapa" => "Norte", "Belem" => "Norte", "Palmas" => "Norte", "Porto Velho" => "Norte", "Rio Branco" => "Norte", "Sao Luis" => "Nordeste", "Teresina" => "Nordeste", "Fortaleza" => "Nordeste", "Natal" => "Nordeste", "Recife" => "Nordeste", "Joao Pessoa" => "Nordeste", "Aracaju" => "Nordeste", "Maceio" => "Nordeste", "Salvador" => "Nordeste", "Cuiaba" => "Centro-Oeste", "Campo Grande" => "Centro-Oeste", "Goiania" => "Centro-Oeste", "Sao Paulo" => "Sudeste", "Rio de Janeiro" => "Sudeste", "Vitoria" => "Sudeste", "Belo Horizonte" => "Sudeste", "Curitiba" => "Sul", "Porto Alegre" => "Sul", "Florianopolis" => "Sul"];

            // Verifica se o estado escolhido existe no array
            if (array_key_exists($estadoEscolhido, $estadoRegiao)) {
                $regiao = $estadoRegiao[$estadoEscolhido];
                echo "<h2>O estado de $estadoEscolhido pertence à região: $regiao</h2>";
            } else {
                echo "<h2>Estado não encontrado.</h2>";
            }
        }
        ?>
         <a href="javascript:history.go(-1)" class="botão">Voltar</a>
    </div>
</body>
</html>