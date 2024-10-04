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
                    $cotacao = 5.424;
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