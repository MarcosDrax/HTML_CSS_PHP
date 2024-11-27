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
        $quantidade_vetor = 0;
        $registroatual = '';
        $registroantecessor = '';
        $linhaAnterior = '';
        $conteudolinhas = []; //vetor
        $final = false;
        $arquivo = fopen("visitas_novo.txt", "r");
            while (true) { //looping
                $linha_arquivo = fgets($arquivo);
                                   
                for ($h=0; $h < 99; $h++) {
                    if (substr($linha_arquivo,$h,1) == '|') {
                        break;
                    } else {
                        $quantidade = $quantidade+1;
                    }
                }

                for ($i=0; $i < 99; $i++) {
                    if (substr($linha_arquivo,$quantidade+$h,1) == '|') {
                        break;
                    } else {
                        $qtd = $qtd+1;
                    }
                }

                $registroatual = substr($linha_arquivo,0,$quantidade);
                $registroNome = substr($linha_arquivo,$quantidade,$qtd);
                $quantidade = 0; 
                $qtd = 0;                            
                                       
                if (($registroatual !==  $registroantecessor) and ($quantidade_vetor!== 0)) {            
                    if ($quantidade_vetor == 1) {
                        //echo $conteudolinhas[0]  = $linhaAnterior."</br>";
                        echo $conteudolinhas[0]."</br>";
                    }
                    $conteudolinhas = []; //zera o vetor
                }
                $conteudolinhas[]   = $registroatual.$registroNome;
                $quantidade_vetor   = count($conteudolinhas);
                $registroantecessor = $registroatual;
                $linhaAnterior = $linha_arquivo;

                if ($linha_arquivo === false) {
                    $final = true;
                break;
                }
            }
        fclose($arquivo);
        ?>
        </main>
        <main>
            <button><a href="p_principal.html" class="botão">Voltar</a></button>
        </main> 
    </body>
</html>
