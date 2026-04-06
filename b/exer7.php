<?php
$b1= $_GET ["v1"];
$b2= $_GET ["v2"];
$v1= explode (" ", $b1);
$v2= explode (" ", $b2);
echo "vetor 1<br>";
for ($b=0; $b<5; $b++)
    {
        echo "$v1[$b] <br>";
    }

echo "vetor 2<br>";
for ($c=0; $c<5; $c++)
    {
        echo "$v2[$c] <br>";
    }

$v3= [];
$o=4;
echo "vetor 3<br>";
for ($i=0; $i<5; $i++)
    {
        $v3[$i]= $v1[$i] + $v2[$o];
        echo "$v3[$i] ";
        $o= $o-1;
    }
?>