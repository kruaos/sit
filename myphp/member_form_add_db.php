<?php
include 'condb.php';


 echo '<pre>';
 print_r($_POST);
 echo '</pre>';

//  echo '<hr>';

//  echo '<pre>';
//  var_dump($_POST);
//  echo '</pre>';


exit;

//ประกาศตัวเเปร รับค่าจากฟอร์ม
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $name = $_POST ['name'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];
//เช็คข้อมูลซ้ำ
    $query = "SELECT username FROM tbl_member WHERE username='$username' " ;
    $result = mysqli_query($condb, $query) or die("error in sql : $query". 
        mysqli_error($query)) ;
    echo 'จำนวนขอมูลที่พบ ' .mysqli_num_rows($result);


exit();



//insert into table
 
    $sql = "INSERT INTO tpl_member   
    (
    username,
    password,
    name,
    phone,
    email,
    )
    ";

    $result = mysqli_query($condb, $sql) or die("error in sql : $sql". mysqli_error($sql)) ;
    mysqli_close($condb) ;
     
     echo $sql;

     echo '<hr>';

    if($result){
        echo "<script type='text/javascript'>";
            echo "alert('Insert Successfully');";
            echo "window. location = 'member_list.php'; ";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('error !!');";
            echo "window. location = 'member_list.php'; ";
        echo "</script>";
    }



    ?>