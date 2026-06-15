<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th> Sigla </th>
            <th> País </th>
        </tr>
    <?php
    $sigla=$_GET['pesquisa'];
    $pais['bra']="Brasil";
    $pais['eua']="Estados unidos da america";
    $pais['mex']="México";
    $pais['tur']="Turquia";
    $pais['esp']="Espanha";
    foreach($pais as $posicao=>$nome){
        echo "<tr>";
        if($sigla==$posicao){
            echo "<td><b> $posicao </b></td> <td><b> $nome </b></td></br>";
        echo "<tr>";
        }
        else {
            echo "<td> $posicao </td> <td> $nome</td><br>";
            echo "<tr>";
        }
    }
    ?>

    

</body>
</html>