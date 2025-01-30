<?php

    $user=$_POST['user'];
    $password=$_POST['password'];

    $connection=mysqli_connect('localhost','root','','test1');

  $query="SELECT * FROM  register WHERE `user_name`='$user' AND `password` = '$password'";

    $result= mysqli_query($connection,$query);


    // while($row=mysqli_fetch_assoc($result))
    // {
    //    echo $row['user_name'];
    // }

    $count = mysqli_num_rows($result);

    if ($count) {
        echo "Match";

    } else {
        echo "Invalid";
    }
    ?>

    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
</body>
</html> -->
    
<?php
mysqli_close($connection)






?>