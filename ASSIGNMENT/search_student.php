<?php

$id = $_POST['id'];
$contact_number = $_POST['contact_number'];

session_start();

$_SESSION['errors'] = [] ;


if (empty($id)) array_push($_SESSION['errors'], "Id is required");
if (empty($contact_number)) array_push($_SESSION['errors'], "Contact Number is required");

// Data validation 
if (sizeof($_SESSION['errors']) != 0) {
    return header('location: search.php');
}

include('connection.php');

$query = "SELECT * FROM std_registration WHERE `id` = '$id' AND `contact_number` = '$contact_number'";

$result = mysqli_query($connection, $query);

if (! mysqli_num_rows($result)) {
    array_push($_SESSION['errors'], "Ops.. Student Not Found..");
    return header('location: search.php');
}

?>