<?php

    if (isset($_GET['id'])) {
        include 'connection.php';

        $id = $_GET['id'];

        $query = "DELETE FROM std_registration WHERE id=$id";

        mysqli_query($$connection, $query);

        mysqli_close($connection);
    } else {
        echo "Opps. Something Went Wrong";
    }
?>
