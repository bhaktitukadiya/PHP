<?php

    session_start();

    if(!  isset($_SESSION["authUser"]) )
    {
        return header("location:index.php");
    }

    if (isset($_GET['id'])) {
        include 'connection.php';

        $id = $_GET['id'];

        $query = "DELETE FROM std_registration WHERE id=$id";

        if(mysqli_query($connection, $query))
        {
            @header("location:students.php");
        }

        mysqli_close($connection);
    } else {
        echo "Opps. Something Went Wrong";
    }
?>
