<?php

//die("Welcome To Goa Singham");


    $user_name=$_POST['name'];
    $password=$_POST['pass'];

    $host="localhost";
    $user="root";
    $psw="";
    $dtbs="test1";

    $connection =  mysqli_connect($host,$user, $psw, $dtbs);


    $query = "INSERT INTO user (user_name, password) VALUES ('$user_name', '$password')";

    if ($connection->query($query) === TRUE) {
        echo "New record created successfully";
        header("location:3_read_user.php");
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
    
    $connection->close();
?>
