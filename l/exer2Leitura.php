<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exer2processamento.php" method="get">
    <?php
    $vetquant= $_GET ["quantidade"];
    $nome= [];
    $nota= [];
    for ($i=0; $i<$vetquant; $i++)
        {
            echo "$i - <input type='text' name='nome[]' placeholder='Digite o nome'><br>";
            echo "$i - <input type='text' name='nota[]' placeholder='Digite a nota'><br>";
        }
    ?>
<input type="submit" value="enviar">
</form>
</body>
</html>