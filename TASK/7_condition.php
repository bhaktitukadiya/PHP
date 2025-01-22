<?php

    $first=$_GET['first'];
    $second=$_GET['second'];

    $select=$_GET['select'];

    // if($select=="addition")
    // {
    //     echo "Addition : ";
    //     echo $first+$second;

    // }

    // elseif($select=="division")
    // {
    //     echo "Division : ";
    //     echo $first/$second;

    // }

    // elseif($select=="subtraction")
    // {
    //     echo "subtraction : ";
    //     echo $first-$second;

    // }

    // elseif($select=="multiplication")
    // {
    //     echo "multiplication : ";
    //     echo $first*$second;

    // }

    // else
    // {
    //     echo "Enter Valid Option ... ";
    // }


switch($select)
{
    case 'addition':
        echo $first+$second;
        break;

case 'division':
echo $first/$second;
break;

case 'multiplication':
echo $first*$second;
break;

case 'subtraction':
    echo $first-$second;
break;

default:
echo "Enter VAlid Option.....";
break;

}

?>