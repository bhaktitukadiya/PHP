<?php

    $num1=10;
    $num2=20;

    function global_var()
    {
        $sum=$GLOBALS['num1']+$GLOBALS['num2'];

        echo $sum;

        echo "<br>";   
    }
    global_var();
?>
<?php  
   $name="BHAKTI";

   function global_var2()
   {

    global $name;
    echo "MY NAME IS : $name";
   }
   global_var2();
?> 