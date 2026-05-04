<?php
$val= $_GET ["valores"];
$vet= explode (" ", $val);
for ($i=9; $i>=0; $i= $i-1)
    {
        echo "$vet[$i] <br>";
    }
?>