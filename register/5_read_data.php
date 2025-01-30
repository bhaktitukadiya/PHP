<?php

    $connection=mysqli_connect("localhost","root","","test1");

    $query="SELECT * FROM  register ";

    $result=mysqli_query($connection,$query);

    ?>

    <html>
        <body>
            <table border="1"><tr>
                <td>id</td>
                <td> User Name </td>
                <td> Password</td>
                <td>DELETE</td>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
                echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['user_name']."</td>
                <td>".$row['password']."</td>
                <td><a href='delete.php?id=".$row['id']."'> DELETE</a></td>
                </tr>";
            }
            ?>
        </table>
        </body>
    </html>
<?php
    // while($row=mysqli_fetch_assoc($result))
    // {
    //     echo $row['password'] ."</BR>  </hr>";
    //     echo $row['user_name']. "</BR>";
    // }

?>