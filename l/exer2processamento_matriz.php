<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2> Resultado </h2>
    <?php
    $linhas= $_GET["linhas"];
    $colunas= $_GET["colunas"];
    for ($i=0; $i<$linhas; $i++)
        {
            for ($j=0; $j<$colunas; $j++)
                {
                    $matriz[$i][$j]= rand(0,100);
                    echo "$matriz[$i][$j]";
                }
        }
        
        echo "<br>";
    ?>
</body>
</html>