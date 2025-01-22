<?php

   echo  "<center>";

    echo "<table border='1' width=100% height=50%  cellpadding=35% >";

    for($i=1; $i<=8; $i++)
    {
        echo "<tr>";

        for($j=1; $j<=8; $j++)
        {
            if(($i+$j)%2==1)
            {
                echo "<td body bgcolor=black></td>";
            }
            else{
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
echo "</table>";

    echo "</center>";
?>