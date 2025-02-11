<?php

session_start();

$user_name = $_POST['user_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($user_name == ''|| $password == ''|| $confirm_password == '')
{

    $_SESSION["error"] = "User Name , Password and Confirm Password Required...";
   return @header('location:register.php');

}

if($password !=$confirm_password)
{
    $_SESSION['error']='Password And Confirm Password Must Be Same ';
   return @header('location:register.php');
}

$connection=mysqli_connect('localhost','root','','test1');


$query1="SELECT * FROM user WHERE `user_name`='$user_name'";

$dublicate=mysqli_query($connection,$query1);

if(mysqli_num_rows($dublicate))
{
    $_SESSION['error']='User Name Already Taken ';
   return @header('location:register.php');
}

$query="INSERT INTO user (user_name,password) VALUE('$user_name','$password')";


if(mysqli_query($connection,$query))
{
    return @header("location:login.php");
}
else
{
    echo "error";
}




?>