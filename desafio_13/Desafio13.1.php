<?php
    $saque       = $_POST['saque'] ?? 0;
    $imagemLocal1 = "cédula-1-real_anverso.png";
    $imagemLocal2 = "cédula-2-real_anverso.png";
    $imagemLocal3 = "cédula-5-real_anverso.png";
    $imagemLocal4 = "cédula-10-real_anverso.png";
    $imagemLocal5 = "cédula-20-real_anverso.png";
    $imagemLocal6 = "cédula-50-real_anverso.png";
    $imagemLocal7 = "cédula-100-real_anverso.png";
    $imagemLocal8 = "cédula-200-real_anverso.png";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 Resultado</title>
    <link rel="stylesheet" href="style.css">
    <style>
      img.nota {
        height: 50px;
        margin: 5px;
      }
    </style>
</head>
    <body>

        <main>
            <h1>Caixa Eletronico</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="saque">Qual valor você deseja sacar?<sup>*</sup></label>
                <input type="number" name="saque" id="saque" step="5" required  value="<?=$vlr_saque?>">
                <p style="font-size: 0,6em"><sup>*</sup>Notas Disponíveis: R$100, R$50, R$ 10 e R$5</p> 
                <input type="submit" value="SACAR"> 
            </form>
        </main>
        <?php
          $resto = $saque;
          $tot200 = floor($resto / 200);
          $resto %= 200;

          $tot100 = floor($resto / 100);
          $resto %= 100;

          $tot50 = floor($resto / 50);
          $resto %= 50;

          $tot20 = floor($resto / 20);
          $resto %= 20;

          $tot10 = floor($resto / 10);
          $resto %= 10;

          $tot5 = floor($resto / 5);
          $resto %= 5;

          $tot2 = floor($resto / 2);
          $resto %= 2;
        ?>

        <section id="resultado">
          <h2>Saque de R$<?=number_format($saque,2,",",".",)?> realizado</h2>
            <p>O Caixa eletronico vai te entregar as seguintes notas</p>
              <ul>
                <li><img src="imagens/100-reais.jpg" alt="nota de 200" class="nota"> x<?=$tot200?></li>
                <li><img src="imagens/100-reais.jpg" alt="nota de 100" class="nota"> x<?=$tot100?></li>
                <li><img src="imagens/50-reais.jpg" alt="nota de 50" class="nota"> x<?=$tot50?></li>
                <li><img src="imagens/20-reais.jpg" alt="nota de 100" class="nota"> x<?=$tot20?></li>
                <li><img src="imagens/10-reais.jpg" alt="nota de 10" class="nota"> x<?=$tot10?></li>
                <li><img src="imagens/5-reais.jpg" alt="nota de 5" class="nota"> x<?=$tot5?></li>
                <li><img src="imagens/2-reais.jpg" alt="nota de 2" class="nota"> x<?=$tot2?></li>
              </ul>
        </section>
    </body>
</html>