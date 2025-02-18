<?php

    $rl=$_GET['roll_no'];

    $host="localhost";
    $user="root";
    $psw="";
    $db_name="test1";

    $connection=mysqli_connect($host,$user,$psw,$db_name);
   
    $query= "SELECT * FROM students WHERE "

    mysqli_query($connection,$query);

?>