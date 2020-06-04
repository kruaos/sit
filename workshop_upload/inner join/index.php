<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
/*
$query = "SELECT * FROM tb_member ORDER BY member_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-md-6'>";
echo '<h4 align="center"> TABLE MEMBER </h4>';
echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC'>
    <td>รหัส</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>อีเมล์</td>
    <td>รหัสตำแหน่ง</td>
  </tr>";
  foreach( $result as $value ) {
  echo "<tr>";
    echo "<td>" .$value["member_id"] .  "</td> ";
    echo "<td>" .$value["member_name"] .  "</td> ";
    echo "<td>" .$value["member_lname"] .  "</td> ";
    echo "<td>" .$value["email"] .  "</td> ";
    echo "<td>" .$value["ref_po_id"] .  "</td> ";

  echo "</tr>";
  }
echo "</table>";
//5. close connection

exit();
echo '<hr>';
echo '</div>';

$query2 = "SELECT * FROM tb_position ORDER BY po_id asc" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query2);

echo "<div class='col-md-3'>";
    echo '<h4 align="center"> TABLE POSITION </h4>';
    echo "<table border='1' align='center' class='table table-hover'>";
      echo "
      <tr align='center' bgcolor='#CCCCCC'>
        <td>รหัส</td>
        <td>ชื่อ</td>
      </tr>";
      foreach( $result2 as $values ) {
      echo "<tr>";
        echo "<td>" .$values["po_id"] .  "</td> ";
        echo "<td>" .$values["po_name"] .  "</td> ";
      echo "</tr>";
      }
    echo "</table>";
    //5. close connection
    echo '<hr>';
    echo '</div>';
echo '</div>'; //row;
*/

$query3 = "
SELECT m.*,p.po_name,d.dep_name
FROM tb_member as m 
INNER JOIN  tb_position as p ON p.po_id = m.ref_po_id
INNER JOIN tb_department as d ON m.ref_dep_id = d.dep_id
ORDER BY  p.po_id asc"
or die("Error:" . mysqli_error());
$result3 = mysqli_query($con, $query3);

//echo $query3;

//exit;

echo "<div class='row'>";
    echo "<div class='col-md-6'>";
    echo '<h4 align="center"> JOIN TABLE </h4>';
echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC'>
    <td>รหัส</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>อีเมล์</td>
    <td>ตำแหน่ง</td>
  </tr>";
  foreach( $result3 as $row ) {
  echo "<tr>";
    echo "<td>" .$row["member_id"] .  "</td> ";
    echo "<td>" .$row["member_name"] .  "</td> ";
    echo "<td>" .$row["member_lname"] .  "</td> ";
    echo "<td>" .$row["email"] .  "</td> ";
    echo "<td class='danger'>" .$row["po_name"] .  "</td> ";
    echo "<td>" .$row["dep_name"] . "</td>";
  echo "</tr>";
  }
echo "</table>";


    echo '</div>';
echo '</div>'; //md-6;
echo '</div>'; //row;
echo '</div>'; //container;
?>
<?php 
mysqli_close($con);
?>