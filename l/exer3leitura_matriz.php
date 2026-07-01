<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exer3processamento_matriz.php" method="get">
        <h2> Leitura dos valores da matriz </h2>
        <?php
        $linhas= $_GET ["linhas"];
        $colunas= $_GET ["colunas"];
        for ($i=0; $i<$linhas; $i++){
            for ($j=0; $j<$colunas; $j++) {
                echo "<input type='text' name='matriz[$i][$j]' placeholder='valor $i - $j'>";
            }
        }
        ?>
        <input type="submit" value="enviar">
    </form>
</body>
</html>