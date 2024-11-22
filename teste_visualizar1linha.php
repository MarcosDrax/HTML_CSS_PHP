<?php
$frequencias = [];
$arquivo = fopen("visitas_novo.txt", "r");


    while (!feof($arquivo)) {
        $linha_arquivo = fgets($arquivo);
        $quantidade = 0;
        for ($i=0; $i < 99; $i++) { //looping
            if (substr($linha_arquivo,$i,1) == '|') {
                break;
            } else {
                $quantidade = $quantidade+1;
            }
        }
        $registroatual = substr($linha_arquivo, 0, $quantidade);


        if ($registroatual !== '') {
            $frequencias[$registroatual] = ($frequencias[$registroatual] ?? 0) + 1;
        }
       
    }


    fclose($arquivo);
    $registrosUnicos = []; //zero o vetor!!!!


    foreach ($frequencias as $registro => $contagem) {
        if ($contagem === 1) {
            $registrosUnicos[] = $registro;
        }
    }
    foreach ($registrosUnicos as $registro) {
        echo $registro . "<br>";
       //echo "Quantidade = " . $frequencias[$registro] . "<br>";
    }
   
?>



