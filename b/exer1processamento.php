<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Todos os nomes </h1>
    <?php
    $vetnome= $_GET ["nome"];
    foreach($vetnome as $nome)
        {
        echo "<br> $nome";
        }
    echo "<br> Essa é a família completa";
?>
<form action="exer1Inicio.html" method="get"> 
    <input type="submit" value="voltar">
</form>
</body>
</html>