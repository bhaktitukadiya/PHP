


<?php

$select=$_GET['select'];

$value1=$_GET['1value'];
$value2=$_GET['2value'];

if ($select=="Addition")
{
    echo "Addition :";
    echo $ans=$value1+$value2;
}
else if($select=="Division")
{
    echo "Division :";
    echo $ans=$value1/$value2;
}
else if($select=="Multiplication")
{
    echo "Multiplication : ";
    echo $value1*$value2;
}
else
{
    echo "Choose The Valid Function";
}






?>

