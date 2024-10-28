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
            /*PARAMETROS
                r (read - leitura) = Abre o arquivo para leitura. O ponteiro é posicionado no início do arquivo. Retorna um erro se o arquivo não existir.
                r+ (read/write - leitura e escrita) = Abre o arquivo para leitura e escrita. O ponteiro é posicionado no início do arquivo. Retorna um erro se o arquivo não existir.
                w (write - escrita) = Abre o arquivo para escrita. O ponteiro é posicionado no início do arquivo e o conteúdo existente é apagado. Cria o arquivo se ele não existir.
                w+ (read/write - leitura e escrita) = Abre o arquivo para leitura e escrita. O ponteiro é posicionado no início do arquivo e o conteúdo existente é apagado. Cria o arquivo se ele não existir.
                a (append - anexar) = Abre o arquivo para escrita. O ponteiro é posicionado no final do arquivo, preservando o conteúdo existente. Cria o arquivo se ele não existir.
                a+ (read/append - leitura e anexar) = Abre o arquivo para leitura e escrita. O ponteiro é posicionado no final do arquivo. Cria o arquivo se ele não existir.
                x (exclusive create - criar exclusivamente) = Cria um novo arquivo para escrita. Retorna um erro se o arquivo já existir, pois não permite sobrescrever. O ponteiro é posicionado no início do arquivo.
                x+ (read/write exclusive create - leitura e criação exclusiva) = Cria um novo arquivo para leitura e escrita. Retorna um erro se o arquivo já existir. O ponteiro é posicionado no início do arquivo.
                c (create if not exists - cria se não existir) = Abre o arquivo para escrita. O ponteiro é posicionado no início do arquivo, preservando o conteúdo. Cria o arquivo se ele não existir.
                c+ (read/write create - leitura e criação se não existir) = Abre o arquivo para leitura e escrita. O ponteiro é posicionado no início do arquivo. Cria o arquivo se ele não existir.
            */


            $nome = $_POST["f_nome"];
            $msg = $_POST["f_msg"]; 
            $rand1 = rand(0,10000);


            $arquivo = fopen("visitas.txt","a"); // Abre o arquivo para leitura
            while(!feof($arquivo)){ // Continua até chegar ao final do arquivo do arqivo
				$linha = fgets($arquivo);
                $registro = substr($linha,0,3);
                echo $registro;
                /*if ($registro == "|") {
                    echo "mostre a variavel $registro";
                }*/
            }

            /*if ($rand1 == $arquivo ) {
                echo "<p>O número $rand1 já existe no arquivo.</p>";
            } else {
                echo "<p>O número $rand1 é único no arquivo.</p>";
            } */



            $conteudo = $rand1."|".$nome."\r\n".$rand1."|".$msg."\r\n"; // "\r\n -> quebra de linha no arquivo txt"
            //fwrite($arquivo,$conteudo); // escreva no arquivo, os dados da variavel "conteudo".
            fclose($arquivo); // Fecha o arquivo
            ?>
            <a href="index.html" class="botão">Voltar</a> 
        </main>
    </body>
</html>
