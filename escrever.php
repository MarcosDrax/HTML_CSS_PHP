<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Escrever</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        /*variaveis*/
        $nome = $_POST["f_nome"];
        $mensagem = $_POST["f_msg"];
        $registroIgual = 0;
        $cont = 1;

        $arquivo = fopen("visitas_novo.txt","r");
        $registro = rand(0,9999999999);
        while(!feof($arquivo)){
            $linha = fgets($arquivo);
            for($i = 0; $i < 99; $i++){
                if (substr($linha,$i+1, 1) == '|'){  
                    break;
                } else {
                    $cont = $cont+1;
                }
            }
            $registCont = substr($linha, 0, $cont);
                    
            if ($registro <> $registCont){
                $registro = $registro; 
            }else{
                $registroIgual = $registCont;
                $registro = rand(0,9999999999); 
               rewind($arquivo);
            }
        $cont = 1;   
        }
        //
            if ($mensagem == ''){
                $conteudo = $registro . "|" . $nome . "|" . $mensagem . "|\r\n";
            }else{
                $conteudo = $registro . "|" . $nome . "|\r\n" . $registro . "|" . $mensagem . "|\r\n";
            }

        $arquivo = fopen("visitas_novo.txt","a");
                    if ($arquivo){
                        fwrite($arquivo, $conteudo);  
                        fclose($arquivo);
                    }
                    header("Location: p_principal.html");
                    exit; // Finaliza o script
        ?>
    </body>
</html>









