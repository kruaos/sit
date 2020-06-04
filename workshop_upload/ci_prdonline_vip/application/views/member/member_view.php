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
              <a href="<?php echo site_url('member/form_add');?>" class="btn btn-success"> +สมาชิก </a>
              <a href="<?php echo site_url('member');?>" class="btn btn-default"> Refresh Data </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr class="danger">
                  <th width="5%">ID</th>
                  <th width="10%">IMG</th>
                  <th width="10%">ตำแหน่ง</th>
                  <th width="40%">ชื่อ-นามสกุล</th>
                  <th width="20%">อีเมล</th>
                  <th width="15%">เบอร์โทร</th>
                  <th width="5%">pwd</th>
                  <th width="5%">แก้ไข</th>
                  <th width="5%">ลบ</th>
                </tr>
                </thead>

                <tbody>
                  <?php foreach($rsmember as $rs){ ?>
                <tr>
                  <td><?php echo $rs->mem_id;?></td>
                  <td><img src="<?php echo base_url('uploads/'.$rs->img);?>" width="100%"></td>
                  <td><?php echo $rs->l_name;?></td>
                  <td><?php echo $rs->mem_fname.$rs->mem_name. ' '.$rs->mem_lname;?></td>
                  <td><?php echo $rs->mem_email;?></td>
                  <td><?php echo $rs->mem_tel;?></td>
                  <td><a href="<?php echo site_url('member/pwd/'.$rs->mem_id);?>" class="btn btn-info btn-xs"> pwd</a></td>
                   <td><a href="<?php echo site_url('member/edit/'.$rs->mem_id);?>" class="btn btn-warning btn-xs"> แก้ไข</a></td>
                  <td>
                  <a href="<?php echo site_url('member/del/'.$rs->mem_id);?>" class="btn btn-danger btn-xs" onclick="return confirm('ยืนยันการลบ');"> ลบ </a></td>
                </tr>
              <?php } ?>
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