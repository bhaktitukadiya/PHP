<?php

    $p=$_GET['p'];
    $r=$_GET['r'];
    $n=$_GET['n'];



    function SI($a,$b,$c)
    {
        echo $a*$b*$c/100;
    }

    SI($p,$r,$n);


?>