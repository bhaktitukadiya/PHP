<?php

    $first=$_GET['first'];
    $second=$_GET['second'];

    $res=$_GET['submit'];


    // if(is_numeric($first) && is_numeric($second))
    
    switch($res)
    {
        case '+':
            $result= $first+$second;
            break;
    
    case '/':
        $result= $first/$second;
    break;
    
    case '*':
        $result= $first*$second;
    break;
    
    case '-':
        $result= $first-$second;
    break;
    
    default:
    echo "Enter VAlid Option.....";
    break;
    
    }

    echo "Result : ".$result;

    
    ?>