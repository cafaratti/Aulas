<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processamento.php" method="get">
         <h1> Digite suas notas </h1>
   <?php
        $quant= $_GET ["quant"];
        for ($i=0; $i<$quant; $i++)
            {
                echo "<input type='text' name='notas[]' placeholder='digite a nota do aluno $i'>";
            }
        ?>
    <input type="submit" value="enviar">
    </form>
</body>
</html>