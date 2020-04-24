<?php

$mytext = ['a','b','c','d'];
//$mytext = ['a','b','c','d'];

sort($mytext);

foreach ($mytext as $key) {
    echo $key . "<hr>";
}

?>