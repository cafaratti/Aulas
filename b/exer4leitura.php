<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exer4processamento.php" method="get">
                  <h1> Digite as alturas dos canos: </h1>
        <?php
        $pulo= $_GET ["salto"];
        $qnt= $_GET ["canos"];
        for ($i=0; $i<$qnt; $i++)
            {
                echo "<input type='text' name='altura[]' placeholder='digite a altura do cano $i'>";
            }
        ?>
        <input type="hidden" name="salto" value="<?php echo $_GET['salto']; ?>">
            <input type="submit" value="enviar">
    </form>
</body>
</html>