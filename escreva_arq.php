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
            //variaveis 
            $nome = $_POST["f_nome"]; //Capturam dados enviados por um formulário HTML através do método POST.
            $msg = $_POST["f_msg"]; //Capturam dados enviados por um formulário HTML através do método POST.
            $ultimoId = 0; //Inicializa uma variável para rastrear o último ID encontrado no arquivo.

            $arquivo = fopen("visitas.txt","r"); // Abre o arquivo para leitura. O ponteiro é posicionado no início do arquivo
            while(!feof($arquivo)){ // Um loop que continua até que o final do arquivo seja atingido.
                $linha = fgets($arquivo);//A função fgets() do PHP lê uma linha de um arquivo aberto
                $registro = explode("|", trim($linha)); // Usei "explode" para dividir cada linha em partes, permitindo que você obtenha o ID completo independentemente do número de dígitos,e trim remove espaços em branco das extremidades. 

                if (isset($registro[0]) && is_numeric($registro[0])) { //Verifica se o primeiro elemento do registro existe e é numérico.
                    $idatual = (int)$registro[0];//Converte o primeiro elemento do registro em um inteiro
                    if ($idatual > $ultimoId){
                        $ultimoId = $idatual; //Atualiza $ultimoId se o ID atual for maior que o último ID encontrado.
                    }
                }
            }

            fclose($arquivo); // Fecha o arquivo
            
            $novoId = $ultimoId + 1; // Gera um novo ID incrementando o último ID.
            $conteudo = $novoId."|".$nome."|"."\r\n".$novoId."|".$msg."|"."\r\n"; // Prepara o conteúdo que será escrito no arquivo. Usa \r\n para adicionar quebras de linha.
            $arquivo = fopen("visitas.txt","a"); // Abre o arquivo em modo de append (a), permitindo adicionar novos dados no final do arquivo.
            if ($arquivo){
                fwrite($arquivo, $conteudo);  // escrevendo no arquivo o conteudo
                fclose($arquivo); // Fecha o arquivo
            }
            ?>
            <a href="index.html" class="botão">Voltar</a> 
        </main>
    </body>
</html>
