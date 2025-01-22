<?php

    $sel=$_GET['select'];

    switch($sel)
    {
        case 'monday':
        echo "<body bgcolor='pink'>";
        break;

        case 'Sunday':
            echo "<body bgcolor='yellow'>";
        break;

        case 'Tuesday':
                echo "<body bgcolor='red'>";
        break;

        case 'Wednesday':
            echo "<body bgcolor='black'>";
    break;

    case 'Thursday':
        echo "<body bgcolor='green'>";
break;

case 'Friday':
    echo "<body bgcolor='purple'>";
break;

        default:
        echo "Erroe";
        break;
    }

?>