<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exer2processamento_matriz.php" method="get">
        <h2> Leitura dos valores da matriz </h2>
        <?php
        $linhas= $_GET ["linhas"];
        $colunas= $_GET ["colunas"];
        if ($linhas == $colunas)
            {
            for ($i=0; $i<$linhas; $i++){
            for ($j=0; $j<$colunas; $j++) {
                echo "<input type='text' name='matriz[$i][$j]' placeholder='valor $i - $j'>";
            }
        }
            }
        else {
            echo "Essa matriz tem que ser quadrada";
        }
            
        ?>
        <input type="hidden" name="colunas" value="<?php echo $_GET['colunas']; ?>"> 
        <input type="hidden" name="linhas" value="<?php echo $_GET['linhas']; ?>"> 
        <input type="submit" value="enviar">
    </form>
</body>
</html>