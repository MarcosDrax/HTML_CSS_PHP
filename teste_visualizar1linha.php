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
		$quantidade_vetor = 0;
		$registroatual = '';
		$registroantecessor = '';
		$linhaAnterior = '';
		$conteudolinhas = []; //vetor
		$final = false;
		$arquivo = fopen("visitas_novo.txt", "r");

			while (true) { //looping
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
										
				if (($registroatual !==  $registroantecessor) and ($quantidade_vetor!== 0)) {            
					if ($quantidade_vetor == 1) { 
						//print_r ($quantidade_vetor);
						echo $conteudolinhas[0]  = $linhaAnterior."</br>";
					}
					$conteudolinhas = []; //zera o vetor
				}
				$conteudolinhas[]   = $registroatual;
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
            <button><a href="visualize.php" target="_self">Visualizar</a></br></button>
            <button><a href="p_principal.html" class="botão">Voltar</a></button>
        </main> 
    </body>
</html>
