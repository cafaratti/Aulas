<?php
$vet1= [];
$vet2= [];
$val= $_GET ["val"];
$v0= explode (" ", $val);
for ($i=0; $i<10; $i++)
{
    echo "$v0[$i] <br>";

}

   if ($i %2 ==0)
        {
            $vet1[$i] = $v0 [$i];
            echo "$vet1 [$i] <br>";
        }
    else 
        { 
            $vet2 [$i]= $v0 [$i];
            echo "$vet2 [$i]<br>";
        }
echo "posições pares"
for ($j=0; $j<9; $j++)
    {
        echo "vet1[$j] <br>";
    }

echo "posições impares"
for ($l=0; $l<9; $l++)
    {
        echo "vet2[$l] <br>";
    }


?>

