<?php
    $anoNasc = $_POST['nasc'] ?? '2000';
    $anoAtl  = $_POST['atual'] ?? date('Y');
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <main>
            <h1>Calculando sua Idade</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for ="inum">Em que Ano voce Nasceu:</label>
                <input type="number" name="nasc" id="inasc" min="1900" max="<?=$anoAtl?>" value="<?=$anoNasc?>">
                <label for ="inum">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoAtl?>)</strong></label>
                <input type="number" name="atual" id="iatual" min="1900" required value="<?=$anoAtl?>">
                <input type="submit" value="Calcular Médias">
            </form>
        </main>
        <section id="resultado">
            <h2>Cálculo das Médias</h2>
                <?php
                    if (($anoNasc == '') and ($anoAtl == '')) {
                        echo "Digite o Ano para calcular sua Idade";
                    }
                    $idadeAtl = number_format(($anoAtl - $anoNasc),0,',','.');
                    //pode-se utilizar o código $hoje = date('d/m/Y'); echo $hoje;
                    echo"Quem Nasceu em $anoNasc vai ter <strong>$idadeAtl anos</strong> em $anoAtl";
                ?>
        </section>
    </body>
</html>