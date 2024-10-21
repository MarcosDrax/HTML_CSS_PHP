<?php
$nome = $_POST['nome'] ?? '';
$nasc = $_POST['nasc'] ?? date('Y');
$sexo = $_POST['sexo'] ?? '';
$anoAtl = date('Y'); // Ajustando para pegar o ano atual diretamente
$idade = $anoAtl - $nasc;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Aula 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
    <h1>Formulario de Cadastro</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" autocomplete="off">
        <input type="submit" name="deletar" value="Deletar">

    </form>
</main>

<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['enviar'])) {
            if (!empty($nome) && !empty($nasc) && !empty($sexo)) {
                echo "<table>";
                echo "<tr>";
                echo "<td>Nome</td>";
                echo "<td>Ano Nascimento</td>";
                echo "<td>Sexo</td>";
                echo "<td>Idade</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$nasc</td>";
                echo "<td>$sexo</td>";
                if ($nasc >= 2024) {
                    echo"Corrija o Ano para identificar a sua idade";
                    }else{
                    echo "<td>$idade</td>";
                }
                echo "</tr>";
                echo "</table>";
            } else {
                echo "<p><strong>Insira os Dados nos Campos</strong>.</p>";
            }
        }
        if (isset($_POST['deletar'])) {
            // Aqui você pode adicionar a lógica para deletar ou limpar os dados
            echo "<p>Dados deletados com sucesso!</p>";
            // Resete as variáveis
            $nome = '';
            $nasc = date('Y');
            $sexo = '';
        }
    }
    ?>
</section>
    <p><button onclick="javascript:window. location.href='exer_02.html'">&#x2B05;Voltar</button></p>
</body>
</html>
