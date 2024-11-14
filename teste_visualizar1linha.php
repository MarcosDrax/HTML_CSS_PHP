            <?php
            $arquivo = fopen("visitas_novo.txt", "r");

            $registrosUnicos = []; 

            $linhaAnterior = '';
            $linhaAtual    = '';
            $linhaSeguinte = '';

            while (!feof($arquivo)) {
                $linhaAnterior = $linhaAtual;
                $linhaAtual    = $linhaSeguinte;
                $linhaSeguinte = fgets($arquivo);
                
                $registroAnterior = substr($linhaAnterior, 0, strpos($linhaAnterior . '|', '|'));
                $registroAtual    = substr($linhaAtual, 0, strpos($linhaAtual . '|', '|'));
                $registroSeguinte = substr($linhaSeguinte, 0, strpos($linhaSeguinte . '|', '|'));
                
                if ($registroAtual !== $registroAnterior && $registroAtual !== $registroSeguinte && $linhaAtual !== '') {
                    $registrosUnicos[] = $linhaAtual; 
                }
            }
                for ($i = 0; $i < count($registrosUnicos); $i++) {
                    echo $registrosUnicos[$i] . "<br>";
                }
            fclose($arquivo);

            ?>
