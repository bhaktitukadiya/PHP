<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body class="container">
    <form action="11_user_form.php" method="get">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" >
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Passwod</label>
            <input type="password" name="confirm_password" class="form-control" >
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
    </form>

  </body>
</html>