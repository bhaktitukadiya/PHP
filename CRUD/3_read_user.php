<?php
    $conn=new mysqli('localhost','root','','test1');
 //server name,username,password as default blank,database name 
    $result=$conn->query("SELECT * FROM user");
?>
<html>
    <body>
        <a href="1_form_register.php"> add new user</a>
        <table border=2>
            <tr>
                <td>id</td>
                <td>User Name</td>
                <td>Password</td>
                <td>Action</td>
            </tr>
            <?php
                if($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc())
                    {
                       echo "<tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["user_name"]."</td>
                            <td>".$row["password"]."</td>
                            <td>
                                <a href='6_update.php'> Update</a>
                                <a href='5_delete.php?id=".$row["id"]."' > Delete</a>


                            </td>
                        </tr>";

                        //7_delete.php?id=1
                    }
                }
                else
                {
                    echo  "<tr colspan='3'>
                    <td> no result found </td>
                    </tr>";
                }
            ?>
        </table>
    </body>
</html>