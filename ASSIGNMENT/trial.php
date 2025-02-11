<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
  <div class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header bg-success text-white text-center">
        <h3>Student Registration Form</h3>
        <p>Fill out the form to apply for the training courses.</p>
      </div>
      <div class="card-body">
        <form>
          <!-- Student Information -->
          <h5>Student Information</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" name="firstname" id="firstName" placeholder="First Name">
            </div>
           
            <div class="col-md-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Last Name">
            </div>
          
            <div class="col-md-6">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="dob">
            </div>

            <div class="col-md-6">
              <label for="stream" class="form-label">Stream</label>
              <input type="text" class="form-control" id="stream" placeholder="Stream">
            </div>
            </div>
            <div class="row  mb-3">