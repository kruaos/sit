<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member_list</title>
</head>
<body>
    
<?php
include 'condb.php';
$query = "SELECT * FROM tbl_member" ;\
$result = mysqli_query($condb, $query) or die("error in sql : $sql". mysqli_error($query)) ;
mysqli_close($condb) ;
?>

<table></table>

</body>
</html>