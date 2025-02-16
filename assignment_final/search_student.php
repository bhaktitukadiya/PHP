<?php

session_start();


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
					<h3>Search Student</h3>
					<p>Fill out the Id and Mobile Number to search</p>
				</div>
				<div class="card-body">

				
					<form action="search.php" method="post" class="text-dark">

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

								$_SESSION["errors"] = [];
							}
						?>   


						<div class="row">
							<div class="form-group col-6">
								<label for="first_name">id</label>
								<input 
									type="text" 
									name="id" 
									class="form-control text-dark" 
								>
							</div>
							<div class="form-group col-6">
								<label for="contact_number">Contact Number</label>
								<input 
									type="text" 
									name="contact_number" 
									class="form-control text-dark" 
								>
							</div>
						</div>
						<div class="row">
							<button type="submit" class="btn btn-primary btn-block mt-10" style="background:#2b2c4b">
								Search Student
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	

</body>

</html>