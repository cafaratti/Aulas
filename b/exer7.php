<?php
<<<<<<< HEAD
$vet3= [];
$val1= $_GET ["val1"];
$val2= $_GET ["val2"];
$vet1= explode (" ", $val1);
$vet2= explode (" ", $val2);
for ($i=0; $i<4; $i++)
{
	$vet3[$i] = $vet1 [$i] + $vet2 [3-$i];
    print_r ("$vet3[$i] <br>");
}

=======
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
>>>>>>> d4be8151fef16a12d120c3125b94bd6ba1e85b75
?>