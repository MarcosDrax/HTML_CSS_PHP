<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculo de Valores Identicos</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <?php
                function delimitador($linha, $demilit = '|') {
                    $quantidade = 0;
                    for ($f = 0; $f < 99; $f++) {
                        if (substr($linha, $f, 1) == $demilit) {
                            break;
                        } else {
                            $quantidade = $quantidade + 1;
                        }
                    }
                    return $quantidade;
                }
                $registroantecessor = '';
                $qtd_vetor = 0;
                $conteudolinhas = [];
                $arquivo = fopen("arquivo_valor.txt", "r");

                while (true) {
                    $s = fgets($arquivo);
                    if ($s === false) break; 
                    $s = trim($s); 
                    if ($s !== '') {;
                        $quantidade = delimitador($s);
                        $id = substr($s, 0, $quantidade);

                        if($id !== $registroantecessor) {/*condição principal*/
                            if ($qtd_vetor == 2) {
                                /*vetor = 0 - refaturar o codigo abaixo */
                                $quantidade = delimitador($conteudolinhas[0]);
                                $restante = $conteudolinhas[0];
                                $qtd_id   = delimitador($restante);
                                $registro = substr($restante, 0, $quantidade);
                                
                                $restante = substr($restante, $qtd_id + 1);
                                $qtd_nome = delimitador($restante);
                                $nome = substr($restante, 0, $qtd_nome);
        
                                $restante = substr($restante, $qtd_nome + 1);
                                $qtd_id1 = delimitador($restante);
                                $id_1 = substr($restante, 0, $qtd_id1);
        
                                $restante = substr($restante, $qtd_id1 + 1);
                                $qtd_vlr1 = delimitador($restante);
                                $valor_1 = substr($restante, 0, $qtd_vlr1);
                                $valor_1_limpo = str_replace(['R$', ',', ' '], ['', '.', ''], $valor_1);
                                $vlr_1 = number_format(floatval($valor_1_limpo), 2, '.', '');
        
                                $restante = substr($restante, $qtd_vlr1 + 1);
                                $qtd_id2 = delimitador($restante);
                                $id_2 = substr($restante, 0, $qtd_id2);
        
                                $restante = substr($restante, $qtd_id2 + 1);
                                $qtd_vlr2 = delimitador($restante);
                                $valor_2 = substr($restante, 0, $qtd_vlr2);
                                $valor_2_limpo = str_replace(['R$', ',', ' '], ['', '.', ''], $valor_2);
                                $vlr_2 = number_format(floatval($valor_2_limpo), 2, '.', '');

                                /*vetor 1- refaturar o codigo abaixo*/
                                $quantid_1 = delimitador($conteudolinhas[1]);
                                $restante1 = $conteudolinhas[1];
                                $qtd_id_1   = delimitador($restante1);
                                $registro01 = substr($restante1, 0, $quantid_1);
                                
                                $restante1 = substr($restante1, $qtd_id + 1);
                                $qtd_nome1 = delimitador($restante1);
                                $nome01 = substr($restante1, 0, $qtd_nome);
        
                                $restante1 = substr($restante1, $qtd_nome1 + 1);
                                $ident_1 = delimitador($restante1);
                                $id_01 = substr($restante1, 0, $ident_1);
        
                                $restante1 = substr($restante1, $ident_1 + 1);
                                $qtd_vlr01 = delimitador($restante1);
                                $valor_01 = substr($restante1, 0, $qtd_vlr01);
                                $valor_01_limpo = str_replace(['R$', ',', ' '], ['', '.', ''], $valor_01);
                                $vlr_01 = number_format(floatval($valor_01_limpo), 2, '.', '');
        
                                $restante1 = substr($restante1, $qtd_vlr01 + 1);
                                $qtd_id02 = delimitador($restante1);
                                $id_02 = substr($restante1, 0, $qtd_id02);
        
                                $restante1 = substr($restante1, $qtd_id2 + 1);
                                $qtd_vlr02 = delimitador($restante1);
                                $valor_02 = substr($restante1, 0, $qtd_vlr02);
                                $valor_02_limpo = str_replace(['R$', ',', ' '], ['', '.', ''], $valor_02);
                                $vlr_02 = number_format(floatval($valor_02_limpo), 2, '.', '');
                            
                                $vlrTot01 = $vlr_1 + $vlr_2;
                                $vlrTot02 = $vlr_01 + $vlr_02;
                                echo  $conteudolinhas[0]."valor total = ".$vlrTot01."<br>";
                                echo  $conteudolinhas[1]."valor total = ".$vlrTot02 ."<br>";
                            }
                            $conteudolinhas = [];
                        }
                        $conteudolinhas[] = $s;
                        $qtd_vetor = count($conteudolinhas);
                        $registroantecessor = $id;
                        //if ($s === false) break;
                    }
                }
                fclose($arquivo);
            ?>
        </main>
        <main>
            <button><a href="p_principal.html" class="botão">Voltar</a></button>
        </main>
    </body>
</html>
