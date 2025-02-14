<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Document</title>
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
            <label for="dob" class="form-label"> Strem </label>     
        <input type="text" name="stream" class="form-control" required >
    </div>

    <div class="col-md-6">
    
    <label for="dob" class="form-label"> Semester </label>
        <input type="number" min=1 max=8 name="semester" class="form-control" >
    </div>

    <div class="col-md-6">
    
        Address 
        <textarea name="address" class="form-control"></textarea>
    </div>

    <div class="col-md-6">
    
        City
        <input type="text" name="city" class="form-control">
    </div>

    <div class="col-md-6">
    
        Pin
        <input type="number" name="pin" class="form-control">
    </div>

    <div class="col-md-6">
    
        Contact Number
        <input type="text"  name="contact" class="form-control">
    </div>

    <div class="col-md-6">
    
        Email 
        <input type="email"  name="email" class="form-control">
    </div>
    </div>


    <button type="submit" class="btn btn-success  btn-block">Register</button>
</form>



</body>
</html>