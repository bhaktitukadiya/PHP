<?php

    $delet=$_GET['roll_no'];
 
    $connecttion=mysqli_connect('localhost','root','','test1');




   $query = "DELETE FROM students WHERE students.roll_no =" . $delet;


 mysqli_query($connecttion,$query);

 header("location:4_read_data.php");


?>