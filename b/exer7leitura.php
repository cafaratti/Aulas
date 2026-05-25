<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome= $_GET ['nome'];
    $sigla= $_GET ['pesquisa'];
    $estados['sp']="São Paulo";
    $estados['rj']="Rio de Janeiro";
    $estados['mg']="Minas Gerais";
    $estados['es']="Espírito Santo";
    $estados['rs']="Rio dGrande do Sul";

foreach ($estados as $posição=>$elemento)
    {
        if ($sigla==$posição)
            {
                echo "$nome <br>";
                print_r($elemento);
            }
    }
    ?>

</body>
</html>