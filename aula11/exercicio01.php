<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php 
            $c = 1;
            while ($c <= 15) {
                echo $c . "</br>";
                $c++;
                //$c = $c + 1; forma2
                //$c += 1; forma3
            }
            echo"<br>";
            $d = 10;
            while ($d >= 0) {
                echo $d . "</br>";
                $d-=2;
                //$c = $c - 1; forma2
                //$c--; forma3
            }
        ?>
    </div>
</body>
</html>