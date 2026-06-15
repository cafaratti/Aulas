<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exer1processamento.php" method="get">
        <h1> Leitura dos Nomes: </h1>
     <?php
     $quant= $_GET ["quantidade"];
     for ($x=0; $x<$quant; $x++)
        {
            echo "$x - <input type='text' name='nome[]' placeholder='Digite aqui'><br>";
        }
        ?>
        <input type="submit" value="enviar">
</form>
</body>
</html>