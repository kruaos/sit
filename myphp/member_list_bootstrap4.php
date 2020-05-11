<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container table table-sm " >
        <div class="row">
          <div class="col-md-12"> 

  <table class="table table-hover table-bordered" >
  
</tr>
    <h3>list member
        <a href="member_form_add_bt4.php" class="btn btn-outline-info  btn-lg btn-block"> เพิ่มข้อมูล </a> 
    </h3>
         <thead>
    <thead class="thead-dark">
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
    echo 'จำนวนข้อมูลที่ query ได้' .mysqli_num_rows($result);
        foreach ($result as $row) { ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td>
                <a href="member_form_add.php?id=<?php echo $row['id'];?>" class="btn btn-outline-primary ">edit</a>
            </td>
            <td>
                <a href="member_delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('ยืนยันการลบข้อมูล');" class="btn btn-outline-danger">ลบ</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
  </div>
  </div>
  </div>
        <?php mysqli_close($condb);   ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
