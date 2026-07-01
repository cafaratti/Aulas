<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Resultado </h2>
    <table border="1">
    <?php
    $matriz= $_GET ["matriz"];
    foreach($matriz as $linha){
        echo "<tr>";
        foreach($linha as $valor){
            echo "<td> $valor - </td>";
        
        }
        echo "</tr>   ";
    }
    ?>
    </table>
</body>
</html>