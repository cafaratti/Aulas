<?php
$vet1= [];
$vet2= [];
$val= $_GET ["val"];
$v0= explode (" ", $val);
for ($i=0; $i<10; $i++)
{
    echo "$v0[$i] <br>";
    if ($i %2 ==0)
        {
            $vet1= $v0 [$i];
            echo "$vet1 <br>";
        }
    else 
        { 
            $vet2= $v0 [$i];
            echo "$vet2 <br>";
        }
}

?>