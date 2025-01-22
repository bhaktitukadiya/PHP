<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        $_SESSION['error'] = "Connection failed: " . $conn->connect_error;
    }


?>