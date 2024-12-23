<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mensagem Clientes</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <?php
                function delimitador($linha,$demilit = '|'){
                    $quantidade = 0;
                    for ($f = 0; $f < 99; $f++){
                        if (substr($linha,$f,1) == $demilit){
                            break;
                        } else {
                            $quantidade = $quantidade+1;
                        }
                    }
                    return $quantidade;
                }

    $quantidade = 0;
    $registroantecessor = '';
    $qtd_vetor = 0;
    $qtd = 0;
    $cont1 = 0;
    $cont2 = 0;
    $conteudolinhas = [];
    $arquivo = fopen("arquivo_valor.txt", "r");

    while (true) { //looping
        $s = fgets($arquivo);
        $quantidade = delimitador($s,'|');
        $id = substr($s,0,$quantidade);
        //$quantidade = 0; 

        $nome = substr($s,$quantidade+1);
        $quantidade = delimitador($nome,'|');
        $quantidade = 0;

        /*
        $idtx = substr($s,$quantidade+1);
        $quantidade = delimitador($idtx,'|');
        $quantidade = 0;


        $vlr = substr($s,$quantidade+1);
        $quantidade = delimitador($idtx,'|');
        $quantidade = 0;
        */


echo "nome = ".$nome."<br>";

        if($id !== $registroantecessor) {/*condição principal*/
            if ($qtd_vetor == 2) {
                for ($i=0; $i < 99; $i++) { /*looping conteudoLinhas[0]*/
                    if (substr($conteudolinhas[0],$i,1) == '|') {
                        break;
                    } else {
                        $cont1 = $cont1+1;
                    }
                }
                
                for ($j = 0; $j < 99; $j++) {
                    if (substr($conteudolinhas[1],$cont1+$j+1,1) == '|') {
                        break;
                    } else {
                       $cont2 = $cont2+1;
                    }
                }
                $identificador = substr($conteudolinhas[0],0, $cont1);
                $linha1 = substr($conteudolinhas[0],$cont1, 60 /*$cont2+1*/);
                $linhaMsg = substr($conteudolinhas[1],$cont1, 60 /*$cont2+1*/);
                //echo  $identificador." " .$linha1."<br>".$identificador." " .$linhaMsg."</br>";
                $cont1 = 0;
                $cont2 = 0;
            }
            $conteudolinhas = [];
        } 
        $conteudolinhas[] = $s;
        $qtd_vetor = count($conteudolinhas);
        $registroantecessor = $id;
                                    
        if ($s === false) break;
    }
    fclose($arquivo);
?>
        </main>
        <main>
            <button><a href="p_principal.html" class="botão">Voltar</a></button>
        </main> 
    </body>
</html>
