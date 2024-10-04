<?php
    $total = $_POST['total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>                
        <main>
            <h1>Calculadora do Tempo</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="itotal">Qual é o total dos Segundos?</label>
                <input type="number" name="total" id="itotal" min="0" step="1" required value="<?=$total?>">
                <input type="submit" value="Calcular"> 
            </form>
        </main>
            <?php
                if ($total == 0) {
                    echo "Digite o Valor para ser Calculado";
                } else {
                $sobra = $total;
                // total da semanas
                    $semana = (int) ($sobra / 604_800);
                    $sobra = $sobra % 604_800;
                // total da Dias
                    $dia = (int) ($sobra / 86_400);
                    $sobra = $sobra % 86_400;
                // total da Horas
                    $hora = (int) ($sobra / 3_600);
                    $sobra = $sobra % 3_600;
                // total da Minutos
                    $minuto = (int) ($sobra / 60);
                    $sobra = $sobra % 60;
                // total da segundos
                    $segundo = $sobra % 604_800;         
                ?>
                        <section id="resultado">
                            <h2>Totalizando Tudo</h2>
                                <p>Analisando o valor que você digitou, <strong><?=number_format($total,0,",",".")?> de segundos</strong> equivalem a um total de:</p>
                                <ul>
                                    <li><?=$semana?> semanas</li>
                                    <li><?=$dia?> dias</li>
                                    <li><?=$hora?> horas</li>
                                    <li><?=$minuto?> minutos</li>
                                    <li><?=$segundo?> segundos</li>
                                </ul>
                        </section>
                    <?php
               } 
               ?> 
    </body>
</html>