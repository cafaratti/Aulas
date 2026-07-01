<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Notas da turma </h2>
     <?php
     $notas= $_GET ['notas'];
     $soma= 0;
     $contagem= count($notas);
     for ($i=0; $i<$contagem; $i++)
     {
        echo "Nota aluno $i: $notas[$i] <br>";
        $soma= $soma + $notas[$i];
     }
     $media= $soma/$contagem;
     echo "A média da turma foi: $media";
     ?>
    <form action="telainicial.php" method="get">
        <input type="submit" value="Retornar ao inicio">
    </form>
</body>
</html>