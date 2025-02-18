<?php

session_start();

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


if($user_name == ''|| $password == ''|| $confirm_password == '')
{

    // $_SESSION["error"] = "User Name , Password and Confirm Password Required...";
    // header('location:register.php');

    echo "error";


}

if($password!=$confirm_password)
{
    // $_SESSION['error']='Password And Confirm Password Must Be Same ';
    // header('location:register.php');

    echo "error";
}

$connection=mysqli_connect('localhost','root','','test1');

$query="INSERT INTO register (first_name,last_name,user_name,password) VALUE('$first_name','$last_name','$user_name','$password')";

mysqli_query($connection,$query);




?>