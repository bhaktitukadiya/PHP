<?php

$server = 'localhost';
$user_name = 'root';
$password = '';
$database_name = 'std_mgt_sys';

$connection = mysqli_connect($server, $user_name, $password, $database_name);

if (mysqli_connect_errno()) {

    die('Server Connection Failed. Please Check Data base Connection'. mysqli_connect_error());
}   


?>