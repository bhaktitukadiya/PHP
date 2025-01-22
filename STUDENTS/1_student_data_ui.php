<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body class="container">
    <div >
    <form action="2_student_data.php" method="GET">
        <div class="form-control mb-2">
            Roll NO : <input type="number" class="form-group" name="rl">
            </div>
        <div class="form-control mb-2">
            First Name : <input type="text" name="fn">
            </div class="mb-2">
        <div class="form-control mb-2">
        Last Name : <input type="text" name="ln">
        </div class="form-control">
        <div class="form-control mb-2">
             Division : <input type="text" name="divi">
             </div>       
              <div class="mb-2">
            <input type="submit" class="btn btn-danger btn-block" value="insert">
</div>
    </form>
    </div>
</body>
</html>