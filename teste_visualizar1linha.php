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
                            }
                            $registroatual = substr($linha_arquivo,0,$quantidade);
                            $quantidade = 0; //reseta a variavel de quantidade

/*Identificador da primeira linha, e conteudo da mensagem da segunda linha
abaixo esta a condição principal*/
                                if($registroatual == $registroantecessor) {
                                    echo "<tr>";
                                    echo "<td>".$conteudolinhas[0] = $linhaAnterior."</br>";
                                    echo "<td>".$conteudolinhas[1] = $linha_arquivo."</br>";
                                    echo "</tr>";
                                } 
                                $conteudolinhas[0] = $linhaAnterior;
                                $conteudolinhas[1] = $linha_arquivo;
                                $registroantecessor = $registroatual;
                                $linhaAnterior = $linha_arquivo;






                        }
                        fclose($arquivo);
                    ?>
