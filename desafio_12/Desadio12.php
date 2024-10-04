<?php
    $segundos = $_POST['segundos'] ?? 0;
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
                <label for="isegund">Qual é o total dos Segundos?</label>
                <input type="number" name="segundos" id="isegund" value="<?=$segundos?>">
                <input type="submit" value="Calcular"> 
            </form>
        </main>

        <section id="resultado">
            <h2>Totalizando Tudo</h2>
                <?php
                    if ($segundos == 0) {
                        echo "<p>Digite o Valor para ser Calculado</p>";
                    } else {
                        // Calcula as semanas (opcional, se quiser manter)
                        $semanas = floor($segundos / (7 * 24 * 60 * 60));
                        $segundos_restantes_da_semana = $segundos % (7 * 24 * 60 * 60);
                        // Calcula os dias
                        $dias = floor($segundos_restantes_da_semana / (24 * 60 * 60));
                        $segundos_restantes_do_dia = $segundos_restantes_da_semana % (24 * 60 * 60);
                        // Calcula as horas
                        $horas = floor($segundos_restantes_do_dia / (60 * 60));
                        $segundos_restantes_da_hora = $segundos_restantes_do_dia % (60 * 60);
                        // Calcula os minutos
                        $minutos = floor($segundos_restantes_da_hora / 60);
                        $segundos = $segundos_restantes_da_hora % 60;
                        // Exibe o resultado
                        echo "Analisando o valor que voce digitou,<strong>$segundos de segundos</strong> equivale a um total de:";
                        echo "<ul><li>$semanas semanas</li>";
                        echo "<li>$dias dias</li>";
                        echo "<li>$horas horas</li>";
                        echo "<li>$minutos minutos</li>";
                        echo "<li>$segundos segundos</li></ul>";
                    }
                ?>
        </section>
    </body>
</html>