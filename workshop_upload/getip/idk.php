<meta charset="UTF-8" />
<?php
include('conn.php'); 


echo '<pre> ';
print_r($_POST);
echo '</pre> ';
exit();

//ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$detail = $_POST["detail"];
	$email = $_POST["email"];
	$cip = $_POST["cip"];
	
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO contact
	(detail, email, cip)
	VALUES
	('$detail', '$email', '$cip')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Thank for contact');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}
?>