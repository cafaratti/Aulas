<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$acertos=0;
$numero= $_GET["questoes"];
$gab= $_GET["gabarito"];
$cand= $_GET["candidato"];
$gabarito= explode (",", $gab);
$candidato= explode (",", $cand);
echo"Número de questões: $numero<br>";
for ($i=0; $i<$numero; $i++)
{
	if ($candidato[$i]==$gabarito[$i])
	{
		$acertos++;
	}
}
for ($b=0; $b<$numero; $b++)
{
	echo "Gabarito: $gabarito[$b] <br>";
}
for ($c=0; $c<$numero; $c++)
{
	echo "Resposta candidato: $candidato[$c]<br>";
}
echo "Acertos: $acertos";
?>
</body>
</html>