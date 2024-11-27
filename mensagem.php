<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Leitura de Arquivo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>

<?php
        $quantidade = 0;
        $qtd = 0;
        $linhas = []; //vetor
        $final = false;
        $arquivo = fopen("visitas_novo.txt", "r");
            while (true) { //looping
                $S = fgets($arquivo);
                                   
                /*for ($h=0; $h < 99; $h++) {
                    if (substr($S,$h,1) == '|') {
                        break;
                    } else {
                        $quantidade = $quantidade+1;
                    }
                }

                for ($i=0; $i < 99; $i++) {
                    if (substr($S,$quantidade+$h,1) == '|') {
                        break;
                    } else {
                        $qtd = $qtd+1;
                    }
                }*/
                $linhas   = []; //zerando a linha no vetor
                $linhas[] = $S;// introduzindo a linha no vetor

                
                 echo '<pre>';
                 print_r($linhas);
                 print_r(count($linhas));
                 echo '</pre>';





                
                if ($S === false) {
                    $final = true;
                break;
                }
            }
        fclose($arquivo);
        ?>
        </main>
        <main>
            <button><a href="escrever.php" target="_self">Visualizar</a></br></button>
            <button><a href="p_principal.html" class="botão">Voltar</a></button>
        </main> 
    </body>
</html>
