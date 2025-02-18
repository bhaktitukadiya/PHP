<?php

// function ab()
// {
//     static $fv;

//     if(!isset($fv))
//     {
//         $fv=isset($_GET['value1']) ? $_GET['value1'] : 0;
//     }

//     echo $fv++;

//     echo $fv;

// }

// ab();
// ab();
// ab();

function abc()
{
    static $first;

    if(!isset($first))
    {
        $first=isset($_GET['value1'])?$_GET['value1']:0;
    }

    $first++;

    echo $first;
    
    

}
abc();
echo "</BR>";
abc();
echo "</BR>";
abc();
echo "</BR>";
abc();
echo "</BR>";
abc();
echo "</BR>";
abc();

?>