<?php

    $connection=mysqli_connect('localhost','root','','test1');

    $query="SELECT  * FROM  students ";

   $students= mysqli_query($connection,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Roll No</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Division</td>
            <td>DELETE</td>
            <td>UPADATW</td>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc( $students))
            {
                echo "<tr>
                            <td>".$row["roll_no"]."</td>
                            <td>".$row["first_name"]."</td>
                            <td>".$row["last_name"]."</td>
                            <td>".$row["division"]."</td>
                            <td> <a href='3_student_delete.php?roll_no=".$row['roll_no']."'> deleted </a></td>
                            <td><a href='5_upadate_form.php?roll_no=".$row['roll_no']."'> UPADATE</a></td>       
                            </tr>";
                       
            }
        ?>
    </table>
</body>
</html>