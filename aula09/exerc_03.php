<?php
    $media1 = $_POST['nota1'] ?? '';
    $media2 = $_POST['nota2'] ?? '';
    $media3 = $_POST['nota3'] ?? '';
    $media4 = $_POST['nota4'] ?? '';
    $nomeAluno = $_POST['nome'] ?? '';
    $media = (($media1 + $media2)+($media3 + $media4))/4;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Aula 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calcular Media</h1>
        <form method="POST" autocomplete="on">
        <section>
            <?php 
                if ($media < 5.0){
                    $aprovd = "<strong>retido</strong>, compareça a Secretaria do Colegio";
                } elseif (($media >= 5.0 && $media <= 7.0)){
                    $aprovd = "aluno em <strong>Recuperação</strong> compareça a Sala para devidas instruções complementares";
                }else{
                    $aprovd = "aluno <strong>Aprovado</strong>, retirar seu Boletim com o Professor na Sala";
                }
                echo"O aluno $nomeAluno, com os resultados, <strong>$media1, $media2, $media3, $media4</strong>, tirou a media ". number_format($media,1,",",".").", sua situação $aprovd .";
            ?>
        </section>
        <a href="exer_03.html" class="botao">Voltar</a>
    </main>
</body>
</html>
