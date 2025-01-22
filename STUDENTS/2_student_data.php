<?php

    $roll_no=$_GET['rl'];
    $first_name=$_GET['fn'];
    $last_name=$_GET['ln'];
    $division=$_GET['divi'];

    $host="localhost";
    $user="root";
    $psw="";
    $db_name="test1";

    $connection=mysqli_connect($host,$user,$psw,$db_name);
    if($connection)
    {
        echo "connected ";
    }
    else
    {
        echo "failed";
    }
    $query= "INSERT INTO students VALUES ('$roll_no','$first_name','$last_name','$division')";

    if(mysqli_query($connection,$query))

    {
        echo "suuccess";
    }
    else
    {
        echo "fail";
    }
?>