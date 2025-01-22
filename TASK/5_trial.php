<?php

function a()
{
    static $a=10;

    $a++;

    echo $a;
}


a();
echo "<br>";

a();
echo "<br>";


a();
echo "<br>";


a();



