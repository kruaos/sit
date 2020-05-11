<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member_list</title>
</head>
<body>   


<table border="1">
    <caption>list member <a href="member_form_add.php"> เพิ่มข้อมูล </a> </caption>
    <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>name</th>
            <th>password</th>
            <th>phone</th>
            <th>email</th>
            <th>edit</th>
            <th>del</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'condb.php';
            $query = "SELECT * FROM tbl_member" ;
            $result = mysqli_query($condb, $query) or die("error in sql : $query". 
            mysqli_error($query)) ;
        foreach ($result as $row) { ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td>
                <a href="member_form_add.php?id=<?php echo $row['id'];?>">edit</a>
            </td>
            <td>
                <a href="member_delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('ยืนยันการลบข้อมูล');">ลบ</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
        <?php mysqli_close($condb);   ?>
</table>
</body>
</html>