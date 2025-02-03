<?php

    $roll_no=$_GET['rl'];
    $first_name=$_GET['fn'];
    $last_name=$_GET['ln'];
    $division=$_GET['divi'];
    $hobbies=$_GET['hobby'];
    $temp="";
    foreach ($hobbies as $key => $hobby) {
        if($temp=="")
        {
            $temp=$hobby;
        }
        else
        {
            $temp = $temp.",". $hobby;    
        }
    }
       echo $temp;
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
    echo $query= "INSERT INTO students(roll_no,first_name,last_name,division,hobby) VALUES ('$roll_no','$first_name','$last_name','$division','$temp')";

    if(mysqli_query($connection,$query))

    {
        echo "suuccess";
    }
    else
    {
        echo "fail";
    }
?>