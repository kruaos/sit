<?php
include 'condb.php';


//  echo '<pre>';
 //print_r($_GET);
 //echo '</pre>';

 //echo '<hr>';

//  echo '<pre>';
//  var_dump($_GET);
//  echo '</pre>';


exit;

//ประกาศตัวเเปร รับค่าจาก url $_GET
    $id= $_GET['id'];

//delete data
 
    $sql = "DELETE FROM tbl_mrmber WHERE id = $id";

    $result = mysqli_query($condb, $sql) or die("error in sql : $sql". mysqli_error($sql)) ;
    mysqli_close($condb) ;
     
     echo $sql;

     echo '<hr>';

    if($result){
        echo "<script type='text/javascript'>";
            //echo "alert('Insert Successfully');";
            echo "window. location = 'member_list.php'; ";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('error !!');";
            echo "window. location = 'member_list.php'; ";
        echo "</script>";
    }



    ?>