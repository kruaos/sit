<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        จัดการ Level
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">รายการ Level</h3>
              <a href="<?php echo site_url('mylevel/form');?>" class="btn btn-success"> +add </a>
              <a href="<?php echo site_url('mylevel');?>" class="btn btn-default"> Refresh Data </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr class="danger">
                  <th width="5%">ID</th>
                  <th width="50%">ชื่อสิทธิการใช้งาน</th>
                  <th width="5%">แก้ไข</th>
                  <th width="5%">ลบ</th>
                </tr>
                </thead>
                <tbody>


                <?php foreach($query as $row){ ?>
                <tr>
                  <td><?php echo $row->l_id;?></td>
                  <td><?php echo $row->l_name;?></td>
                  <td><a href="<?php echo site_url('mylevel/edit/'.$row->l_id);?>" class="btn btn-warning btn-xs"> แก้ไข</a></td>
                  <td>
                    <a href="<?php echo site_url('mylevel/del/'.$row->l_id);?>" class="btn btn-danger btn-xs" onclick="return confirm('ยืนยันการลบ');"> ลบ </a></td>
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