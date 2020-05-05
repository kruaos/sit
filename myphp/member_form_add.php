<DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title> the 1 </title>
    <like rel="stylesheet" href="">
</head>
<body>
    <?php
        include 'condb.php';
        //ไอดีที่ส่งมาแก้ไข
        $id = $_GET['id'];
        //echo $id;
        $query ="SELECT * FROM tbl_member WHERE id=$id";
        $result = mysqli_query($condb, $query) or die("error in sql : 
            $query". mysqli_error($query));
        $row = mysqli_fetch_array($result);
    
        //print_r($row);
    
    
    ?>

    <h1>สมาชิก/เเก้ไขปรับปรุงสมาชิก</h1>
        <form action="member_form_add_db.php" method="post">
        id
        <input type="number" name="id" value="<?php echo $row['id'];?>" readonly>
        <br>
        username
        <input type="text" name="username" placeholder="username"
        required value="<?php echo $row['username'];?>">
        <br>
        password
        <input type="password" name="password" placeholder="password"
        required value="<?php echo $row['password'];?>">
        <br>
        name
        <input type="texe" name="name" placeholder="name"
        required value="<?php echo $row['name'];?>">
        <br>
        phone
        <input type="text" name="phone" placeholder="phone"
        required value="<?php echo $row['phone'];?>">
        <br>
        email
        <input type="email" name="email" placeholder="email"
        required value="<?php echo $row['email'];?>">
        <br>
        <button type="submit">save </button>
        </form>

</body>
</html>
