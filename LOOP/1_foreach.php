<?php

    $student=array(
        "name"=>"Bhakti",
        "Age"=>"25",
        "Gender"=>"Female"
    );

    foreach($student as $key=> $stud )
    {
        echo $key. " : " .$stud . "<br>";
    }

?>