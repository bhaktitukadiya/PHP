<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrao.css">
    <style>
        body
        {
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background-color:#f8f9fa
        }
        .login-container{
            width:100%;
            max-width:400px;
            padding:20px;
            border-radius:10px;
            background-color:#fff;
            box-shadow:0 4px 8px rgba(0,0,0,0.1);
            text-align:center;
        }
        .logo{
            font-size:2rem;
            color:#5b4eff;
            margin-bottom:20px;
        }
        .btn-primary{
            background-color:#5b4eff;
            border-color:#5b4eff;
        }
        .btn-primary:hover{
            background-color:#3f3bd3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <i class="fa-solid fa-user"></i>
        </div>
        <h2 class="mb-4">Sign In To Your Account </h2>
        <form action="">
            <div class="mb-3 text-start">
                <label for="email" class="form-label"> Email address</label>
                <input type="email" class="form-control" id="password">
            </div>

            <div class="mb-3 text-start">
                <label for="password" class="form-label"> Password</label>
                <input type="password" class="form-control" id="password">

            <div class="text-end mt-1">
                <a href="#" class="link-primary"> Forgot Password </a>
            </div>
            </div>
            <button type="submit" class="btn btn-primary w-100"> Sign in</button>
        </form>
        <p class="mt-3">Don't Have An Account <a href="#" class="link-primary"> Creat New Account</a> </p>
    </div>
</body>
</html>