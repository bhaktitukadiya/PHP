<?php

echo time();


setcookie("name","bhakti",time()+2000,"/");

if(isset($_COOKIE['name']))
{
    echo "name :". $_COOKIE['name'];
}

?>