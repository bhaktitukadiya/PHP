<?php

    function odevn($a)
    {
        if($a % 2==0)
        {
            echo "Even Number ".$a;
        }
        else
        {
            echo "Odd Number ".$a;
        }
    }

    odevn($_GET['nm']);

?>