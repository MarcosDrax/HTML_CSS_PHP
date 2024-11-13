<?php
	$quantidade = 0;
	$registroatual = '';
	$registroantecessor = '';
	$linhaAnterior = '';
	$conteudolinhas = [];

	$arquivo = fopen("visitas_novo.txt", "r");
	while (!feof($arquivo)) { //looping
		$linha_arquivo = fgets($arquivo);
		for ($i=0; $i < 99; $i++) { //looping
			if (substr($linha_arquivo,$i,1) == '|') {
				break;
			} else {
				$quantidade = $quantidade+1;
			}
			$registroatual = substr($linha_arquivo,0,$quantidade);
		}
		                                
		$quantidade = 0; //reseta a variavel de quantidade
        
        $conteudolinhas = [$registroatual];
        echo "<pre>";
        print_r($conteudolinhas)  ;
        echo"</pre>";

        
        $registroantecessor = $registroatual;

	}
	fclose($arquivo);
?>
