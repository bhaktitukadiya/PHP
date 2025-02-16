<?php

$connection = mysqli_connect('localhost', 'root', '','std_mgt_sys');

if (mysqli_connect_errno()) {

    die('Server Connection Failed. Please Check Data base Connection'. mysqli_connect_error());
}   


?>