<?php
    $saque = $_POST['saque'] ?? 0;
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
                <label for="isegund">Qual é o total dos Segundos?</label>
                <input type="number" name="saque" id="saque" value="<?=$saque?>"><p style="font-size: 0,6em"><sup>*</sup>Notas Disponíveis: R$ 200, R$100, R$50, R$ 20, R$ 10, R$5 e R$ 2</p> 
                <input type="submit" value="SACAR"> 
            </form>
        </main>
        <section id="resultado">
          <?php
            if ($saque == 0) {
              echo "<h2>Digite o Valor !</h2>";
            } else{
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
              echo"<h2>Saque de R$". number_format($saque,2,",",".") ." realizado</h2>";
              echo"<p>O Caixa eletronico vai te entregar as seguintes notas</p>";
              echo"<ul><li><img src='imagens/200-reais.jpg' alt='nota de 200' class='nota'> x$tot200</li>";
              echo"<li><img src='imagens/100-reais.jpg' alt='nota de 100' class='nota'> x$tot100</li>";
              echo"<li><img src='imagens/50-reais.jpg' alt='nota de 50' class='nota'> x$tot50</li>";
              echo"<li><img src='imagens/20-reais.jpg' alt='nota de 20' class='nota'> x$tot20</li>";
              echo"<li><img src='imagens/10-reais.jpg' alt='nota de 10' class='nota'> x$tot10</li>";
              echo"<li><img src='imagens/5-reais.jpg' alt='nota de 5' class='nota'> x$tot5</li>";
              echo"<li><img src='imagens/2-reais.jpg' alt='nota de 2' class='nota'> x$tot2</li></ul>";              
            }
          ?>
        </section>
    </body>
</html>