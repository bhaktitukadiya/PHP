<?php

session_start();

if(! isset($_SESSION["username"]) )
{
    return header("location:login.php");
}

?>

<html>
<head>
        <link rel="stylesheet" href="../bootstrap.css">
        
    </head>
<body class="container">

    <?php include 'navbar.php';?>

    <div> May jaaaaaaaa </div>

   </body>
</html>