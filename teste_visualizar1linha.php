<?php
    $quantidade = 0;
    $quantidade_vetor = 0;
    $registroatual = '';
    $registroantecessor = '';
    $conteudolinhas = []; //vetor
    $arquivo = fopen("visitas_novo.txt", "r");

    while (!feof($arquivo)) { //looping
        $linha = fgets($arquivo);
        for ($i=0; $i < 99; $i++) {
            if (substr($linha,$i,1) == '|') {
                break;
            } else {
                $quantidade = $quantidade+1;
            }
            $registroatual = substr($linha,0,$quantidade);
        }
        $quantidade = 0;                            
			
        if (($registroatual !==  $registroantecessor) and ($quantidade_vetor!== 0)) {           
            if ($quantidade_vetor == 1) { 
            echo $conteudolinhas[0] ."_".$quantidade_vetor."</br>";
            }
            $conteudolinhas = []; //zera o vetor
        }
        $conteudolinhas[]   = $registroatual;
        $quantidade_vetor   = count($conteudolinhas); 
        $registroantecessor = $registroatual; 
        
        if($registroatual == ' '){
            break;
        }
    }
    fclose($arquivo);
    ?>
