<?php
include 'condb.php';


 echo '<pre>';
 print_r($_POST);
 echo '</pre>';

 echo '<hr>';

 echo '<pre>';
 var_dump($_POST);
 echo '</pre>';


exit;

//ประกาศตัวเเปร รับค่าจากฟอร์ม
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $name = $_POST ['name'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];
    $id= $_POST['id'];

//insert into table
 
    $sql = "UPDATE tpl_member SET
    
    username='$username',
    password='$password',
    name='$name',
    phone='$phone',
    email='$email'
    
    WHERE id = $id
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