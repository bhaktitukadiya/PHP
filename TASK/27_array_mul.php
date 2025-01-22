<?php

    

    $students[0]=array(
        "Student Name "=> "Bhakti",
        "Roll NO " => "154",
        "Division " => "C"
    );

    $students[1]=array(
        "Student Name "=> "Bhakti1",
        "Roll NO " => "154",
        "Division " => "C"
    );

    $students[2]=array(
        "Student Name "=> "Bhakti2",
        "Roll NO " => "154",
        "Division " => "C"
    );


foreach($students as  $student)
{
    foreach($student as $key => $value)
    {
        echo $key . " : ". $value . "</BR>";
    }
    echo "</BR>";
}


?>