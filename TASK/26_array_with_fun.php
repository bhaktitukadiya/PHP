<?php

    function student_data($student_name, $roll_no,$div)
    {
      $students=[];

      $students["Student Name"]=$student_name;
      $students["Roll No"]=$roll_no;
      $students["Division"]=$div;
      
      foreach($students as $key => $vallue)

      {
        echo  $key ." : ". $vallue. "</BR>";
      }
    }

    student_data("Bhakti", "154", "C");


?>