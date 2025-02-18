<?php

$p=$_GET['p'];
$r=$_GET['r'];
$n=$_GET['n'];

$sim=$p*$r*$n/100;

    function SI($sim)
    {
        echo $sim;
    }

    $simple="si";
    $simple($sim);

?>