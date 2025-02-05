<?php

session_start();

$user_name = $_POST['user_name'];
$password = $_POST['password'];

if($user_name == ''|| $password == '')
{

    $_SESSION["error"] = "User Name and  Password Required...";
   return @header('location:login.php');

}


$connetion = mysqli_connect('localhost', 'root', '', 'test1');

$query = "SELECT * FROM user WHERE `user_name` = '$user_name' AND `password` = '$password'";


$result = mysqli_query($connetion, $query);

if (! mysqli_num_rows($result)) {
    $_SESSION["error"] = "Credentioal invalid...";
    return @header('location:login.php');
}

$_SESSION["username"] = $user_name;

header('location:dashboard.php');

?>