<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Document</title>
</head>

<body class="container">

        
<form action="2_register.php" method="post">
<div class="form-group ">
    <div class="col-6">
        First Name
        <input type="text" name="first_name" class="form-control" required>

        <div class="form-group">
        Last Name
        <input type="text" name="last_name" class="form-control" required>
        </div>
    <div class="form-group">
        Date Of Birth 
        <input type="date" name="bday" class="form-control" required>
    </div>

    <div class="form-group">
       Strem 
        <input type="text" name="stream" class="form-control" required >
    </div>

    <div class="form-group">
        Semester
        <input type="number" min=1 max=8 name="semester" class="form-control" >
    </div>

    <div class="form-group">
        Address 
        <textarea name="address" class="form-control"></textarea>
    </div>

    <div class="form-group">
        City
        <input type="text" name="city" class="form-control">
    </div>

    <div class="form-group">
        Pin
        <input type="number" name="pin" class="form-control">
    </div>

    <div class="form-group">
        Contact Number
        <input type="text"  name="contact" class="form-control">
    </div>

    <div class="form-group">
        Email 
        <input type="email"  name="email" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary  btn-block">Register</button>
</form>



</body>
</html>