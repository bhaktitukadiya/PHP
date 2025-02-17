<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
$_SESSION["confirm_password"] = $confirm_password;

if($name == ''|| $email == ''|| $password == ''|| $confirm_password == '')
{

    $_SESSION["error"] = "Name, Email, Password and Confirm Password Required...";
    $_SESSION['authPage'] = "register";

    return header('location:index.php');
}


if($password != $confirm_password)
{
    $_SESSION['error']='Password And Confirm Password Must Be Same ';
    $_SESSION['authPage'] = "register";

    return @header('location:index.php');
}

include('connection.php');

$checkForDuplicateQuery="SELECT * FROM admin WHERE `email`='$email'";

$duplicate=mysqli_query($connection,$checkForDuplicateQuery);

if(mysqli_num_rows($duplicate))
{
    $_SESSION['error']='Admin Already Taken ';
    $_SESSION['authPage'] = "register";

   return @header('location:index.php');
}

$query="INSERT INTO admin (name, email, password) VALUE('$name', '$email', '$password')";

if(mysqli_query($connection,$query))
{
    $_SESSION['success']='Admin Registered Successfully. <br/> Please SIGN IN to access Admin Features';

    return @header("location:index.php");

}

?>