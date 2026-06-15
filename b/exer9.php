<?php
$val= $_GET ["val"];
$vet= explode (" ", $val);
$menor= $vet [0];
for ($i=0; $i<7; $i++)
{
	
	if ($i==0){
	$menor= $vet [$i];
	}
	if ($vet [$i] < $menor){
		$menor= $vet [$i];
	}
	
}
echo "menor valor: $menor <br>";
for ($j=0; $j<7; $j++)
{
$divisao= $vet [$j] / $menor;
echo "divisões: $divisao <br>";
}
?>