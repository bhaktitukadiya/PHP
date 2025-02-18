<?php

$delet=$_GET['id'];

$connection=mysqli_connect("localhost","root","","test1");

$query="DELETE FROM register WHERE register.id= " .$delet ;

mysqli_query($connection,$query);

?>