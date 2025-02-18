<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email == ''|| $password == '')
{

    $_SESSION["error"] = "Email and  Password Required...";
    return @header('location:index.php');

}

include('connection.php');


$query = "SELECT * FROM admin WHERE `email` = '$email' AND `password` = '$password'";


$result = mysqli_query($connection, $query);


if (  mysqli_num_rows($result)  == 0 ) {
    $_SESSION["error"] = "Credential invalid...";

    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;

    return @header('location:index.php');
}

$_SESSION["authUser"] = $email;
header('location:students.php');

?>