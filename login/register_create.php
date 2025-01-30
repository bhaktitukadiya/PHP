<?php

session_start();

$user_name = $_POST['user_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($user_name == ''|| $password == ''|| $confirm_password == '')
{

    $_SESSION["error"] = "User Name , Password and Confirm Password Required...";
    header('location:register.php');

}

if($password !=$confirm_password)
{
    $_SESSION['error']='Password And Confirm Password Must Be Same ';
    header('location:register.php');
}

$connection=NEW mysqli('localhost','root','','test1');

$query="INSERT INTO user (user_name,password) VALUE('$user_name','$password')";


if($connection->query( $query ) === TRUE)
{
    echo "login successfully";
}
else
{
    echo "error";
}




?>