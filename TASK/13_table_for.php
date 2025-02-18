<?php

    echo "<table border='1' width=50% height=80% >";
    

    for($i=1; $i<=25; $i++)
    {
        if($i==1)
        {
            echo "<tr>";
        }
        if($i % 2==1 )
        {
            echo "<td>$i</td>";
            
        }
        else
        {
            echo "<td body bgcolor=black> </td>";
        }
        if($i % 5==0)
        {
            echo "</tr>";
        }
    }

    echo "</table>"

?>