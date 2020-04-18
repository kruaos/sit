<?php

$price = 100;
$dis = 10;
$pdis = ($price*$dis/100);
$ptotal = ($price-$pdis);
echo "price = ".number_format($price,2)." บาท"; 
echo "<br/>";
echo "discount = ".$dis ."%";
echo "<br/>";
echo "pdis = ".number_format($pdis,2)." บาท";
echo "<br/>";
;echo "price total = ".number_format($ptotal,2). " บาท";
?>