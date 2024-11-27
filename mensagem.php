<?php
$caracter = 0;
$qtd = 0;
$linhaprinc = '';
$arquivo = fopen("visitas_novo.txt", "r");

while (!feof($arquivo)) {
    $linha_arquivo = fgets($arquivo);
    /*algoritmo para encontrar o ID no arquivo*/
    for ($h=0; $h < 99; $h++) {
        if (substr($linha_arquivo,$h,1) == '|') {
            break;
        } else {
            $caracter = $caracter+1;
        }
    }
    /*algoritmo para encontrar a mensagem no arquivo*/
    for ($i=0; $i < 99; $i++) {
        if (substr($linha_arquivo,$caracter+$h,1) == '|') {
            break;
        } else {
            $qtd = $qtd+1;
        }
    }


    $id = substr($linha_arquivo, 0, $caracter);
    $mensagem = substr($linha_arquivo, $caracter, $qtd);
    $caracter = 0;
    $qtd = 0;
    // condição principal e de exibição de tela 
    if (($linhaprinc == true) && ($linhaprinc == $id)) {
        echo  $id.$mensagem."<br>";
    }
    $linhaprinc = $id;
}
fclose($arquivo);
?>
