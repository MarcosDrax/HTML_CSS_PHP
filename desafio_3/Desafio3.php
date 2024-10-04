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
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <section>
        <form action="Desafio3.php" method="POST" autocomplete="off">
            <label for="inum">Quantos R$ voce tem na sua carteira? </label>
                <input type="number" name="numero" id="inum" step="0.01">
                <input type="submit" value="CONVERTER">
                <main>
                        <!--- Script PHP - ini!--->
                        <?php 
                        
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
                                $dolarCT = 5.424;
                                $numb = floatval($_POST["numero"]); 
                                    $dolar = number_format($numb /  $dolarCT, 2, ',', '.');
                                    echo "<p>Seus R$ <strong>$numb </strong> ,Valem o valor Dólar equivalente US$ <strong>$dolar</strong></p>";
                                    echo "*Cotação fixa de R$ $dolarCT  informada diretamente no codigo.";
                            }
                        ?>
                        <!--- Script PHP - fim!--->
                </main>
        </form>
    </section>
</body>
</html>