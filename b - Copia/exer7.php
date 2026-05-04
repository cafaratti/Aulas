<?php
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

?>