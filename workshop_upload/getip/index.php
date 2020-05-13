<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ติดต่อ</title>
</head>

<body>
    <?php echo $_SERVER['REMOTE_ADDR'];?>
<form name="form" method="post" action="save.php">
<b> ข้อมูลการติดต่อ </b>
<br>
รายละเอียด  : <br> 
<textarea name="detail"></textarea> <br>
อีเมล์ :<br>
<input type="email" name="email" />
<input type="hidden" name="cip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>" />
<br><br>
<button type="submit" name="save"> บันทึก </button>

</form>
</body>
</html>