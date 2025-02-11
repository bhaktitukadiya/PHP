<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">

    <script src="../jquery-3.7.1.min.js"></script>
    <title>Document</title>
</head>

<body class="container">

    <div class="d-none">
        bhakti Tukadiya
    </div>

    <p>show me</p>

    <script>


        $(document).ready(function(){
            
            $("p").click(function(){

                $(this).hide();
            })

            // $("#hide").click(function(){
            // $("p").hide();
            // });


            
        });

    </script>
</body>
</html>