<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Leitura de Arquivo</title>
        <link rel="stylesheet" href="style.css">
        <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    </head>
    <body>
    <h2>Registros de Visitas</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Mensagem</th>
            </tr>
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
                                if($registroatual == $registroantecessor) {
                                    echo "<tr>";
                                    echo "<td>".$conteudolinhas[0] = $linhaAnterior."</br>";
                                    echo "<td>".$conteudolinhas[1] = $linha_arquivo."</br>";
                                    echo "</tr>";
                                } 
                                $registroantecessor = $registroatual;
                                $linhaAnterior = $linha_arquivo;
                        }
                        fclose($arquivo);
                    ?>
                            </table>
                <main>
                    <button><a href="p_principal.html" class="botão">Voltar</a></button>
                </main> 
    </body>
</html>