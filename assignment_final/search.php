<?php

$id = $_POST['id'];
$contact_number = $_POST['contact_number'];

session_start();

$_SESSION['errors'] = [] ;


if (empty($id)) array_push($_SESSION['errors'], "Id is required");
if (empty($contact_number)) array_push($_SESSION['errors'], "Contact Number is required");



// Data validation 
if (sizeof($_SESSION['errors']) != 0) {
    return header('location: search_student.php');
}


include('connection.php');

$query = "SELECT * FROM std_registration WHERE `id` = '$id' AND `contact_number` = '$contact_number'";

$result = mysqli_query($connection, $query);

if (! mysqli_num_rows($result)) {
    array_push($_SESSION['errors'], "Ops.. Student Not Found..");
    return header('location: search_student.php');
}

$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$date_of_birth = $row['date_of_birth'];
$stream = $row['stream'];
$semester = $row['semester'];
$city = $row['city'];
$pin = $row['pin'];
$contact_number = $row['contact_number'];
$email = $row['email'];



?>


<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="home-4">

    <?php
        include('header.php');
    ?>

    <section id="bi-about-4" class="bi-about-section-4">
		<div class="container">
			<div class="card shadow-lg">
				<div class="card-header text-center"  style="background:#2b2c4b">
					<h3>Student Detail</h3>
				</div>
				<div class="card-body text-dark">

                    <div class="row">
                        <div class="col-4 text-end">
                            id :
                        </div>
                        <div class="col-8">
                            <?php echo $id ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            first_name :
                        </div>
                        <div class="col-8">
                            <?php echo $first_name ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            last_name :
                        </div>
                        <div class="col-8">
                            <?php echo $last_name ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            date_of_birth :
                        </div>
                        <div class="col-8">
                            <?php echo $date_of_birth ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            stream :
                        </div>
                        <div class="col-8">
                            <?php echo $stream ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            semester :
                        </div>
                        <div class="col-8">
                            <?php echo $semester ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            city :
                        </div>
                        <div class="col-8">
                            <?php echo $city ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            pin :
                        </div>
                        <div class="col-8">
                            <?php echo $pin ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            contact_number :
                        </div>
                        <div class="col-8">
                            <?php echo $contact_number ?>r
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-end">
                            email :
                        </div>
                        <div class="col-8">
                            <?php echo $email ?>
                        </div>
                    </div>

                    <div class="row">
                        <a href="search_student.php" 
                            class="btn btn-primary btn-block mt-10 text-white" 
                            style="background:#2b2c4b"
                        > 
                            GO Back 
                        </a>
                    </div>
				</div>
			</div>
		</div>
	</section>
	

</body>

</html>