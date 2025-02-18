<?php 

session_start();

session_unset();

return header("location:index.php");

?>
        