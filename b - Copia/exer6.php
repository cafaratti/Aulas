<?php
$b1= $_GET ["v1"];
$b2= $_GET ["v2"];
$v3= [];
$v1= explode (" ", $b1);
$v2= explode (" ", $b2);
$c1= count ($v1);
$c2= count ($v2);
if ($c1 == $c2)
    {
        for ($i=0; $i<10; $i++)
            {
                $v3= $v1[$i] * $v2[$i];
                echo "$v3 [$i] <br>";

            }
    }
else
    {
        echo "não podemos efetuar o exercício";
    }