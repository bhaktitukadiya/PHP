<?php

    echo "<table border='1'>";

    $a=1;

    for($i=1; $i<=25; $i++)
    {
        if($i==1)
        {
            echo "<tr>";
        }
        if($i %2 ==!0)
        {
            echo "<td>".$a. "</td>";
            $a++;
        }
        else
        {
            echo "<td></td>";
        }
        if($i % 5==0)
        {
            echo "</tr>";
        }

    }

    echo "</table>";

?>