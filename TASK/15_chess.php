<?php

    echo "<table border='1'>";

    for($i=1; $i<=64; $i++)
    {
        if($i==1)
        {
            echo "<tr>";

        }

        if($i % 2 ==0  )
        {
            echo "<td>".$i."</td>";
        }
        else
        {
            echo "<td></td>";
        }

        if($i%8==0)
        {
            echo "</tr>";
        }
    }

    echo "<table>";

?>