<?php
$condb = mysqli_connect("localhost",
    "root",
    "",
    "workshop_crud_member" ) or die("error : ". 
    mysqli_error($condb));
//set utf8
mysqli_query($condb, "SET NAMES 'utf8' ");

//echo date('Y-m-d H:i:s');
//set time zome
date_default_timezone_set('asia/Bangkok');

// echo '<hr>';
// echo date('Y-m-d H:i:s');

?>