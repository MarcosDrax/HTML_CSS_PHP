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
                $conteudolinhas = []; 
                $ids_processados = []; 
                $arquivo = fopen("arquivo_valor.txt", "r");

                while (true) { 
                    $s = fgets($arquivo); 
                    
                    $quantidade = delimitador($s, '|');
                    $id = substr($s, 0, $quantidade); 

                    $restante = substr($s, $quantidade + 1);
                    $qtd_nome = delimitador($restante);
                    $nome = substr($restante, 0, $qtd_nome);

                    $restante = substr($restante, $qtd_nome + 1);
                    $qtd_id1 = delimitador($restante);
                    $id_1 = substr($restante, 0, $qtd_id1);

                    $restante = substr($restante, $qtd_id1 + 1);
                    $qtd_vlr1 = delimitador($restante);
                    $valor_1 = substr($restante, 0, $qtd_vlr1);
                    $valor_1_limpo = str_replace(['R$', ',', ' '], ['', '.', ''], $valor_1);
                    $vlr_1 = floatval($valor_1_limpo);

                    $restante = substr($restante, $qtd_vlr1 + 1);
                    $qtd_id2 = delimitador($restante);
                    $id_2 = substr($restante, 0, $qtd_id2);

                    $restante = substr($restante, $qtd_id2 + 1);
                    $qtd_vlr2 = delimitador($restante);
                    $valor_2 = substr($restante, 0, $qtd_vlr2);
                    $valor_2_limpo = str_replace(['R$', ',', ' '], ['', '.', ''], $valor_2);
                    $vlr_2 = floatval($valor_2_limpo);

                    if ($id !== $registroantecessor) {
                        if (count($conteudolinhas) > 1) {
                            for ($i = 0; $i < count($conteudolinhas); $i++) {
                                echo $conteudolinhas[$i] . "<br>";
                            }
                            $conteudolinhas = [];
                        }
                    }
 
                    if (!empty($ids_processados[$id])) {
                        $conteudolinhas[] = $s; 
                    } else {
                        $ids_processados[$id] = 1; 
                        $conteudolinhas = [$s]; 
                    }
                    
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
