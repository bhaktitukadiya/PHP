<?php

$delet=$_GET['id'];

$connection = new mysqli('localhost' ,'root','','test1');


$query = "DELETE FROM user WHERE `user`.`id` = $delet";

if ($connection->query($query) === TRUE) {
    echo "Data Deleted";
    // header("location:3_read_user.php");
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();


?>