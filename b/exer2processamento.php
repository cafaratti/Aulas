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
    $vetnota= $_GET ["nota"];
    $quantidade= count ($vetnome);
    $soma= 0;
    $media=0;
    $maior= $vetnota [0];
    $menor= $vetnota [0];
    $alunomais= $vetnome [0];
    $alunomenos= $vetnome [0];
    for ($i=0; $i< $quantidade; $i++)
        {
        echo "<br> aluno: $vetnome[$i] <br> nota: $vetnota[$i] <br>";
        $soma= $soma + $vetnota [$i];
        if ($vetnota [$i] > $maior)
            {
                $maior= $vetnota [$i];
                $alunomais= $vetnome [$i];
            }
        if ($vetnota [$i] < $menor)
            {
                $menor= $vetnota [$i];
                $alunomenos= $vetnome [$i];
            }
        }
    $media= $soma / $quantidade;
    echo "<br> A nota maior da turma é: $maior do aluno: $alunomais";
    echo "<br> A nota menor da turma é: $menor do aluno: $alunomenos";
    echo "<br> A média da turma é: $media";
?>
<form action="exer2Inicio.html" method="get"> 
    <input type="submit" value="voltar">
</form>
</body>
</html>