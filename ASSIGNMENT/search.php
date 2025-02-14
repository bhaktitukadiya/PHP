<?php

session_start();


?>

<html>
<head>
    <title>Search Registration</title>

    <link rel="stylesheet" href="bootstrap.css">

</head>

<body class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header bg-success text-white text-center">
        <h3>Search Student</h3>
        <p>Fill out the Id and Mobile Number to search</p>
      </div>
      <div class="card-body">
        <form action="search_student.php" method="post">

            <?php 
                if (isset($_SESSION["errors"]) &&  sizeof($_SESSION["errors"]) != 0) {
            ?>
                <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                    <i class="bi-exclamation-octagon-fill"></i>
                    <strong class="mx-2">Error!</strong> 
                    <ul>
                        <?php
                            foreach ($_SESSION["errors"] as $error) {
                                echo "<li>". $error ."</li>";    
                            }
                        ?>
                    </ul>
                </div>
            
            <?php 
                session_unset();
                }
            ?>   


            <div class="row">
                <div class="form-group col-6">
                    <label for="first_name">id</label>
                    <input type="text" 
                        name="id" 
                        class="form-control" 
                    >
                </div>
                <div class="form-group col-6">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" 
                        name="contact_number" 
                        class="form-control" 
                    >
                </div>
            </div>

            <button type="submit" class="btn btn-secondary btn-block">Search Student</button>
        </form>
        </div>
    </div>
</body>
</html>