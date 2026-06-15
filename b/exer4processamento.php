<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Resultado: </h1>
    <?php
    $vitorias=0;
    $derrota=0;
    $pulo= $_GET ["salto"];
    $alturas= $_GET ['altura'];
    $qnt= count($alturas);
    for($i=1; $i<$qnt; $i++)
        {
            if ($alturas[0]>$pulo)
                {
                    echo "gameover";
                    $derrota++;
                    break;
                }
            else 
                {
                    $vitorias++;
                }
            if($i!=$qnt-1){
             if ($alturas[$i+1]-$alturas[$i]>$pulo)
                {
                    echo "gameover";
                    $derrota++;
                    break;
                }
            }
            else{
                $vitorias++;
            }
        }
  if ($derrota==0)
                {
                    echo "vitória!";
                }
        ?>
</body>
</html>



