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
              <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr class="danger">
                  <th width="5%">ID</th>
                  <th width="50%">ชื่อ-นามสกุล</th>
                  <th width="20%">อีเมล</th>
                  <th width="15%">เบอร์โทร</th>
                  <th width="5%">แก้ไข</th>
                  <th width="5%">ลบ</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Mr.aaaa bbbbbb</td>
                  <td>devbanban@gmail.com</td>
                  <td>0948616709</td>
                  <td><a href="" class="btn btn-warning btn-xs"> แก้ไข</a></td>
                  <td>
                    <a href="" class="btn btn-danger btn-xs" onclick="return confirm('ยืนยันการลบ');"> ลบ </a></td>
                </tr>
                </tbody>
              </table>
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