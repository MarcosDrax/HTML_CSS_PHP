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

    //$quantidade = 0;
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

        $restante   = substr($s,$quantidade+1);
        $qtd_nome   = delimitador($restante);
        $nome       = substr($restante,0,$qtd_nome);

        $restante   = substr($restante,$qtd_nome+1);
        $qtd_id1    = delimitador($restante);
        $id_1       = substr($restante,0,$qtd_id1);

        $restante   = substr($restante,$qtd_id1+1);
        $qtd_vlr1  = delimitador($restante);
        $valor_1    = substr($restante,0,$qtd_vlr1);
        $vlr_1      = floatval($valor_1);

        $restante   = substr($restante,$qtd_vlr1+1);
        $qtd_id2    = delimitador($restante);
        $id_2       = substr($restante,0,$qtd_id2);

        $restante   = substr($restante,$qtd_id2+1);
        $qtd_vlr2   = delimitador($restante);
        $valor_2    = substr($restante,0,$qtd_vlr2);
        $vlr_2      = floatval($valor_2);

        echo "ID: $id<br>";
        echo "Nome: $nome<br>";
        echo "ID Taxa: $id_1<br>";
        echo "Taxa 1: $vlr_1<br>";
        echo "ID Taxa: $id_2<br>";
        echo "Taxa 2 : $vlr_2<br>";




        //echo "nome = ".$nome." - Id Taxa 1 = ".$idtx." - Valor = ".$vlr. " - Id Taxa 2 = ".$idtx2."<br>";

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
