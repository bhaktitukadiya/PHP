<html>
<head>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body class="container">

    <?php include 'navbar.php';?>

    <form action="login_check.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-secondary  btn-block">Login</button>
    </form>

</body>
</html>