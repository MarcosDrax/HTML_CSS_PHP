<?php 
    $txt = isset($_POST["t"]) ? $_POST["t"]:"Testo Genenerica";
    $tam = isset($_POST["tam"]) ? $_POST["tam"]:"12pt";
    $cor = isset($_POST["cor"]) ? $_POST["cor"]:"#000000";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span.texto{
            font-size: <?php echo$tam; ?>;
            color: <?php echo$cor; ?>;
        }
    </style>
</head>
<body>
    <?php 
    echo "<span class='texto'>$txt</span>";
    ?>
        <p><button onclick="javascript:window. location.href='exer_03.html'">&#x2B05;Voltar</button></p>
</body>
</html>