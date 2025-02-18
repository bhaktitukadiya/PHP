<?php

    $first=$_GET['first'];
    $two=$_GET['second'];

    if($first > $two)
    {
        echo " First Value is Higher Then Second Value";
    }
    elseif($first < $two)
    {
        echo "First Value is Lower Then Second Value";
    }
    else
    {
        echo "Both Value Are Equal";
    }

?>