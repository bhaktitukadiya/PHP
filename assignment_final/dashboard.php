<?php
session_start();

if(!  isset($_SESSION["authUser"]) )
{
    return header("location:index.php");
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
			<div class="row">

			</div>
			<div class="card text-dark">
				<div class="card-body">
					<h5 class="card-title">Student Management</h5>
					<p class="card-text">
						Welcome Admin ! <br/> 
					</p>
					<p>
						Admin Can search student data using id and contact number, update data, Register new Student and datatable to see all student record .    
					</p>
				</div>
			</div>
		</div>
	</section>
	

</body>

</html>