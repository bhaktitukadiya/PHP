
<html>
    <head>
        <link rel="stylesheet" href="../bootstrap.css">
    </head>
    <body class="container">

        
        <form action="2_register.php" method="post">
        <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-secondary  btn-block">Register</button>
        </form>

       
    </body>
</html>