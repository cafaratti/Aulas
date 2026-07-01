<?php
$quant=0;
$val= $_GET["valores"];
$bum= explode (" ", $val);
for ($i=0; $i<10; $i++)
    {
        echo "$bum[$i] <br>";
        if ($bum[$i]%2==0)
            {
                $quant++;
            }
            }
            echo "A QUANTIDADE DE PARES É: $quant";
    ?>