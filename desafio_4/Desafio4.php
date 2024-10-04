<!--- Script HTML!--->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversar de Moedas</h1>
            <!--- Script PHP - ini!--->
                <?php 
                $inicio = date("m-d-Y",strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);

                $cotacão = $dados["value"][0]["cotacaoCompra"];
                echo "A Cotação foi $cotacão";


                    $real = $_REQUEST["numero"] ?? 0; 
                    $dolar = $real /  $cotacao;

                    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                        echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão,$dolar,"USD");
                ?>
            <!--- Script PHP - fim!--->
        <p><button onclick="javascript:window. location.href='Desafio3vs1.html'">&#x2B05;Voltar</button></p>
        </main>
</body>
</html>