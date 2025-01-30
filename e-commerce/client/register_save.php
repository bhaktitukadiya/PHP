<?php

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        //return to reg form
        // message not same
    }

    // DB connection
    include('../database/connection.php');

    // email as unique
    
?>
