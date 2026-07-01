<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pessoa=array();
    $pessoa[0][0]= "João";
    $pessoa[1][0]= "Gustavo";
    $pessoa[2][0]= "Maria";
    $pessoa[0][1]= "Fernando";
    $pessoa[1][1]= "Rafael";
    $pessoa[2][1]= "Manuela";

    for($i=0; $i<3; $i++){
        for ($j=0;$j<2;$j++){
            echo "$pessoa[$i][$j]";
        }
    }
    ?>
</body>
</html>