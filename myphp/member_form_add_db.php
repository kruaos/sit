<?php
include 'condb.php';


echo '<pre>';
print_r($_POST);
echo '</pre>';

echo '<hr>';

echo '<pre>';
var_dump($_POST);
echo '</pre>';



//ประกาศตัวเเปร รับค่าจากฟอร์ม
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $name = $_POST ['name'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];


//insert into table
 
    $sql = "INSERT INTO tbl_member
    (
    username,
    password,
    name,
    phone,
    email
    )
    VALUES
    (
    '$username',
    '$password',
    '$name',
    '$phone',
    '$email'
    )
    ";

    $result = mysqli_query($condb, $sql) or die("error in sql : $sql". mysqli_error($sql)) ;
    mysqli_close($condb) ;
     



    if($result) {
        echo 'Insert Successfully';
    }else{
        echo 'Error !!';
    }
    ?>