<?php

    $num=array("1","3","8","9","12","13","14","15");

    foreach($num  as $value)
    {
        if($value % 2==0)
        {
            echo " </br> Number Is Even : ".$value ;
        }
        else
        {
            echo " </br>Number Is Odd : ". $value;
        }
    }

?>