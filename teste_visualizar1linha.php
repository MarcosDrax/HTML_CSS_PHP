<?php
    $quantidade = 0;
    $quantidade_vetor = 0;
    $registroatual = '';
    $registroantecessor = '';
    $conteudolinhas = []; //vetor

    $arquivo = fopen("visitas_novo.txt", "r");
    while (!feof($arquivo)) { //looping
        $linha_arquivo = fgets($arquivo);
        for ($i=0; $i < 99; $i++) { 
            if (substr($linha_arquivo,$i,1) == '|') {
                break;
            } else {
                $quantidade = $quantidade+1;
            }
            $registroatual = substr($linha_arquivo,0,$quantidade);
        }
        $quantidade = 0;                             
/* preciso adicionar 1 registro por vez mesmo aqueles registros que são iguais*/
        if (($registroatual !== $registroantecessor) or ($quantidade_vetor == 1)){

            if ($quantidade_vetor == 1){
                $conteudolinhas
            }
            /*agora ele está pegando somente um registro por linha mas ainda aparece os registro duplicados, preciso que ele filtre os registros duplicados */



            $conteudolinhas[] = $linha_arquivo;
            echo "<pre>";
            print_r($conteudolinhas); 
            print_r($quantidade_vetor);
            echo "</pre>";
            $conteudolinhas = []; //zera o vetor
            $registroantecessor = $registroatual;
            $quantidade_vetor = count($conteudolinhas);
        }
    }
    fclose($arquivo);    
    ?>
