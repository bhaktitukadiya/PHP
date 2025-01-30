<html>
<head>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body class="container">
    <form action="register_save.php" method="post">
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword">
        </div>
        <div class="form-group">
            <label for="exampleInputConfirmPassword">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" id="exampleInputConfirmPassword">
        </div>
        <button type="submit" class="btn btn-secondary  btn-block">Register</button>
    </form>
</body>
</html>