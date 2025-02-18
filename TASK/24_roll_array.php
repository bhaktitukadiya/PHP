<?php

    $students[0]=array("student_name"=>"name0", "student_rool_no"=>"00" ,"student_divition"=>"A0" );
    $students[1]=array("student_name"=>"name1", "student_rool_no"=>"01" ,"student_divition"=>"A1" );
    $students[2]=array("student_name"=>"name2", "student_rool_no"=>"02" ,"student_divition"=>"A2" );
    $students[3]=array("student_name"=>"name3", "student_rool_no"=>"03" ,"student_divition"=>"A3" );
    $students[4]=array("student_name"=>"name4", "student_rool_no"=>"04" ,"student_divition"=>"A4" );
    $students[5]=array("student_name"=>"name5", "student_rool_no"=>"05" ,"student_divition"=>"A5" );
    $students[6]=array("student_name"=>"name6", "student_rool_no"=>"06" ,"student_divition"=>"A6" );
    $students[7]=array("student_name"=>"name7", "student_rool_no"=>"07" ,"student_divition"=>"A7" );
    $students[8]=array("student_name"=>"name8", "student_rool_no"=>"08" ,"student_divition"=>"A8" );
    $students[9]=array("student_name"=>"name9", "student_rool_no"=>"09" ,"student_divition"=>"A9" );


    foreach ($students as $key => $student) {
        foreach ($student as $key => $value) {
            echo $key. ": ". $value . "  ";
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
    }

?>