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
    $matriz= $_GET ["matriz"];
    foreach($matriz as $linha){
        foreach($linha as $valor){
            echo "$valor -";
        
        }
        echo "<br>";
    }
    ?>
</body>
</html>