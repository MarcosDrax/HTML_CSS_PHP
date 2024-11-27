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
            $arquivo = fopen("visitas_novo.txt","r"); // Abre o arquivo para leitura
                while(!feof($arquivo)){ // Continua até chegar ao final do arquivo
				$linha = fgets($arquivo); //A função fgets() do PHP lê uma linha de um arquivo aberto
                $registro = substr($linha,0,75);
					echo $registro;//Lê uma linha do arquivo até 255 caracteres e retorna a string da linha
                    //echo fgets($arquivo); 
                    //echo "<br>".(substr($linha1,3,100)); //Lê uma linha do arquivo até 10.000 caracteres  e retorna a string da linha
                     /*A função fgets em PHP é usada para ler uma linha de um arquivo texto, retornando uma string até encontrar uma nova linha (\n), atingir o limite de caracteres especificado ou chegar ao final do arquivo.*/
                    echo"</br>";
                }
                fclose($arquivo); // Fecha o arquivo
            ?>
        </main>
        <main>
            <button><a href="p_principal.html" class="botão">Voltar</a></button>
        </main> 
    </body>
</html>