<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php 
            // Verifica se o formulário foi enviado
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $aluno = $_POST["naluno"] ?? 'Aluno Desconhecido';
                $n1 = $_POST["n1"] ?? 0;
                $n2 = $_POST["n2"] ?? 0; 
                $n3 = $_POST["n3"] ?? 0; 
                $n4 = $_POST["n4"] ?? 0;    

                // Calcula a média
                $media = ($n1 + $n2 + $n3 + $n4) / 4;

                // Exibe os resultados
                echo "<h1>Resultados para $aluno</h1>";
                echo "Notas: $n1, $n2, $n3, $n4 <br>";
                echo "Média: " . number_format($media, 2) . "<br>";

                // Verifica a situação do aluno
                if ($media < 5.0) {
                    echo "<fildset><legend>resultado</legend>";
                    echo "Status: Reprovado";
                    echo "</fildset>";
                } elseif (($media >= 5.0 && $media <= 7.0)){
                    echo "<fildset><legend>resultado</legend>";
                    echo "Status: Recuperação";
                    echo "</fildset>";
                } else{
                    echo "<fildset><legend>resultado</legend>";
                    echo "aluno <strong>Aprovado</strong>, retirar seu Boletim com o Professor na Sala";
                    echo "</fildset>";
                }
            } else {
                echo "<fildset><legend>resultado</legend>";
                echo "Nenhum dado foi enviado.";
                echo "</fildset>";
            }
        ?>
        <a href="exercicio03.html" class="botao">Voltar</a>
    </div>
</body>
</html>
