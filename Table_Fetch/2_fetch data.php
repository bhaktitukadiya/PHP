<html>
    <head>
        <title> table </title>
    </head>
    <body>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test1";

        $conn = new mysqli('localhost', 'root', '', 'test1');

        /*if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            echo 'connection succesfull';
        }*/

       // $sql = "SELECT * FROM marksheet";

        $result = $conn->query("SELECT * FROM marksheet");
        ?>
        <table border="1">
            <tr>
            <td>student id</td>
            <td>Student Name</td>
            <td> English</td>
            <td>Math</td>
            <td>Html</td>
            <td>Iks</td>
        </tr>
        <?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    echo "<tr>
                        <td>".$row["studenta-id"]."</td>
                        <td>".$row["student_name"]."</td>
                        <td>".$row["math"]."</td>
                        <td>".$row["english"]."</td>
                        <td>".$row["iks"]."</td>
                        <td>".$row["html"]."</td>
                    </tr>";
                    //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                }
            } else {
                echo "0 results";
            }
        ?>
        </table>
    </body>
</html>