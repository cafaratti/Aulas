<?php
$val= $_GET["idades"];
$boom= explode (" ", $val);
$soma=0; 
for ($i=0; $i<10; $i++)
    {
        echo "$boom[$i] <br>";
         $soma += $boom[$i];
        if ($i==0)
            {
                $maior= $boom[$i];
                $menor= $boom[$i];
            }
        else
            {
                if ($boom[$i]>$maior)
                    { 
                        $maior= $boom[$i];
                    }
                if ($boom[$i]<$menor)
                    {
                        $menor= $boom[$i];
                    }


            }
    }
    $media = $soma / 10;
    echo "menor: $menor <br> maior: $maior <br> média: $media ";
    ?>