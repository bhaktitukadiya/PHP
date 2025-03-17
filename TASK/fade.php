<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function()
    {
        $("#fadein").click(function()
    {

        $("#div1").fadeIn(3000);
        $("#div2").fadeIn(6000);
        $("#div3").fadeIn(9000);
                
    })
    });
    </script>
</head>
<body>

    <input type="button" id="fadein" value="fadeineffect">

    <div id="div1" style="width:80px; height:80px; display:none; background-color:red;"></div> <br>
    <div id="div2" style="width:80px; height:80px; display:none; background-color:green;"></div> <br>
    <div id="div3" style="width:80px; height:80px; display:none; background-color:blue;"></div>
</body>
</html>