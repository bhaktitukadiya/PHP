<?php

    function profit($net_amount)
    {

        //user re mokli a net amount
        // profit 15% =  net amount * 0.15
        // selling price = net amount + profit 
      echo "Profit Is : ". $profit= $net_amount * 0.15;
            $selling_price=$profit+$net_amount;

       echo "Selling Price Is : ".$selling_price;
    }

    profit($_GET['slt']);

?>