<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    จัดการสมาชิก
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">รายการสมาชิก</h3>
            <a href="member.html" class="btn btn-success"> +สมาชิก </a>
            <a href="#" class="btn btn-default"> Refresh Data </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <h1>Form Register</h1>
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  user
                </div>
                <div class="col-sm-4">
                  <input type="text" name="user" class="form-control" placeholder="email" required minlength="3">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2 control-label">
                  password
                </div>
                <div class="col-sm-4">
                  <input type="password" name="user" class="form-control" placeholder="password" required minlength="3">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  คำนำหน้าชื่อ
                </div>
                <div class="col-sm-2">
                  <select name="fname" class="form-control" required>
                    <option value="">-เลือก-</option>
                    <option value="นาย">-นาย-</option>
                    <option value="นาง">-นาง-</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2 control-label">ชื่อ</div>
                <div class="col-sm-3">
                  <input type="text" name="name" class="form-control" required minlength="3" placeholder="ชื่อ">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2 control-label">นามสกุล</div>
                <div class="col-sm-3">
                  <input type="text" name="lname" class="form-control" required minlength="3" placeholder="นามสกุล">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  email
                </div>
                <div class="col-sm-4">
                  <input type="email" name="email" required class="form-control"  placeholder="email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  phone
                </div>
                <div class="col-sm-4">
                  <input type="text" name="phone" required class="form-control"  placeholder="phone">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  file
                </div>
                <div class="col-sm-4">
                  <input type="file" name="img" required class="form-control" accept="image/*">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-primary" style="width: 100%;">SAVE</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->