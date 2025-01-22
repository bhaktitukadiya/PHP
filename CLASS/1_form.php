<?php
$hobbies = $_GET['hobby'];

echo implode(" , ",$hobbies)."<br>";

echo var_dump($hobbies)."</BR>";

echo print_r($hobbies)."</BR>";

foreach ($hobbies as $key=> $hobbie)
{
    echo $key. " = ".$hobbie ."</BR>";
}

for ($i=0; $i < count($hobbies) ; $i++)
{ 
    echo "<br>".$hobbies[$i];
}


?>