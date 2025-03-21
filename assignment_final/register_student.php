<?php
session_start();

if(!  isset($_SESSION["authUser"]) )
{
    return header("location:index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {

    $errors = [];

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $stream = $_POST["stream"];
    $semester = $_POST["semester"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $pin = $_POST["pin"];
    $contact_number = $_POST["contact_number"];
    $email = $_POST["email"];

    if (empty($first_name)) array_push($errors, "First Name is required");
    if (empty($last_name)) array_push($errors, "Last Name is required");
    if (empty($date_of_birth)) array_push($errors, "Date of Birth is required");
    if (empty($stream)) array_push($errors, "Stream is required");
    if (empty($semester)) array_push($errors, "Semester is required");
    if (empty($address)) array_push($errors, "Address is required");
    if (empty($city)) array_push($errors, "City is required");
    if (empty($pin)) array_push($errors, "Pin Code is required");
    if (empty($contact_number)) array_push($errors, "Contact Number is required");
    if (empty($email)) array_push($errors, "Email is required");


    // sizeof used to array length
    if (sizeof($errors) == 0) {

        //db connection
        include("connection.php");

        //Check For Duplicate
        $duplicateQuery ="SELECT id FROM std_registration WHERE email = '$email' OR contact_number = '$contact_number'";

        $ifDuplicate=mysqli_query($connection,$duplicateQuery);

        if( mysqli_num_rows($ifDuplicate ))
        {
            array_push($errors, "Email or Contact Number already exists!");
        } else {

            $query = "
            INSERT INTO `std_registration` 
            (
                `first_name`,
                `last_name`,
                `date_of_birth`,
                `stream`,
                `semester`,
                `address`,
                `city`,
                `pin`,
                `contact_number`,
                `email`
            )
            VALUES(
                '$first_name',
                '$last_name',
                '$date_of_birth',
                '$stream',
                '$semester',
                '$address',
                '$city',
                '$pin',
                '$contact_number',
                '$email'
            )
        ";

        if (mysqli_query($connection, $query)) {

            $first_name = "";
            $last_name = "";
            $date_of_birth = "";
            $stream = "";
            $semester = "";
            $address = "";
            $city = "";
            $pin = "";
            $contact_number = "";
            $email="";

            // echo "Student Registered Successfully..";
        }
        mysqli_close($connection);

        }
    }

}

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
				<div class="card-header text-center" style="background:#2b2c4b">
					<h3>Student Registration Form</h3>
					<p>Fill out the form to apply for the training courses.</p>
				</div>
				<div class="card-body text-dark">
					<form action="" method="post">

						<?php 

						if (isset($errors) &&  sizeof($errors) != 0) {
							?>
							<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
								<i class="bi-exclamation-octagon-fill"></i>
								<strong class="mx-2">Error!</strong> 
								<ul>
									<?php
										foreach ($errors as $error) {
											echo "<li>". $error ."</li>";    
										}
									?>
								</ul>
							</div>
						
						<?php 

						}

						?>    
						<div class="row">
							
							<div class="form-group col-6">
								<label for="first_name">First Name</label>
								<input type="text" 
									name="first_name" 
									class="form-control" 
									id="first_name"
									value="<?php echo isset($first_name) ? $first_name : '';  ?>"
								>
							</div>
							
							<div class="form-group col-6">
								<label for="last_name">Last Name</label>
								<input type="text" 
									name="last_name" 
									class="form-control" 
									id="last_name"
									value="<?php echo isset($last_name) ? $last_name : '' ?>"
								>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="date_of_birth">Birth Date</label>
								<input type="date" 
									name="date_of_birth" 
									class="form-control" 
									id="date_of_birth"
									value="<?php echo isset($date_of_birth) ? $date_of_birth : '' ?>"
								>
							</div>
					
							<div class="form-group col-6">
								<label for="address">Address</label>
								<input type="text" 
									name="address" 
									class="form-control" 
									id="address"
									value="<?php echo isset($address) ? $address : '' ?>"
								>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="stream">Stream</label>
								<input type="text" 
									name="stream" 
									class="form-control" 
									id="stream"
									value="<?php echo isset($stream) ? $stream : '' ?>"
								>
							</div>
					
							<div class="form-group col-6">
								<label for="semester">Semester</label>
								<input type="number" 
									name="semester" 
									class="form-control" 
									id="semester"
									value="<?php echo isset($semester) ? $semester : '' ?>"
								>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="city">City</label>
								<input type="text" 
									name="city" 
									class="form-control" 
									id="city"
									value="<?php echo isset($city) ? $city : '' ?>"
								>
							</div>
					
							<div class="form-group col-6">
								<label for="pin">Pin Code</label>
								<input type="text" 
									name="pin" 
									class="form-control" 
									id="pin"
									value="<?php echo isset($pin) ? $pin : '' ?>"
								>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="contact_number">Contact Number</label>
								<input type="text" 
									name="contact_number" 
									class="form-control" 
									id="contact_number"
									value="<?php echo isset($contact_number) ? $contact_number : '' ?>"
								>
							</div>
					
							<div class="form-group col-6">
								<label for="email">Email</label>
								<input type="email" 
									name="email" 
									class="form-control" 
									id="email"
									value="<?php echo isset($email) ? $email : '' ?>"
								>
							</div>
						</div>
						<div class="row">
							<button type="submit" class="btn btn-primary btn-block mt-10 col-12" style="background:#2b2c4b">
								Register
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	

</body>

</html>