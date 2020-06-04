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
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <h1>Form Add Member</h1>
            <form action="<?php echo site_url('member/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
               <div class="form-group row">
                <div class="col-sm-2 control-label">
                  ตำแหน่ง
                </div>
                <div class="col-sm-2">
                  <select name="l_id" class="form-control" required>
                    <option value="">-เลือก-</option>

                    <?php foreach($query as $rs){ ?>
                    <option value="<?php echo $rs->l_id;?>">-<?php echo $rs->l_name;?>-</option>
                    <?php } ?>


                  </select>
                  <span class="fr">
                  <?php echo form_error('l_id'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  username
                </div>
                <div class="col-sm-4">
                  <input type="text" name="mem_username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" class="form-control" placeholder="email" required minlength="3" value="<?php echo set_value('mem_username'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_username'); ?>
                </span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2 control-label">
                  password
                </div>
                <div class="col-sm-4">
                  <input type="password" name="mem_password" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" class="form-control" placeholder="password" required minlength="3" value="<?php echo set_value('mem_password'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_password'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  คำนำหน้าชื่อ
                </div>
                <div class="col-sm-2">
                  <select name="mem_fname" class="form-control" required>
                    <option value="">-เลือก-</option>
                    <option value="นาย">-นาย-</option>
                    <option value="นาง">-นาง-</option>
                    <span class="fr">
                  <?php echo form_error('mem_fname'); ?>
                </span>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2 control-label">ชื่อ</div>
                <div class="col-sm-3">
                  <input type="text" name="mem_name" class="form-control" required minlength="3" placeholder="ชื่อ" value="<?php echo set_value('mem_name'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_name'); ?>
                </span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2 control-label">นามสกุล</div>
                <div class="col-sm-3">
                  <input type="text" name="mem_lname" class="form-control" required minlength="3" placeholder="นามสกุล" value="<?php echo set_value('mem_lname'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_lname'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  email
                </div>
                <div class="col-sm-4">
                  <input type="email" name="mem_email" required class="form-control"  placeholder="email" value="<?php echo set_value('mem_email'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_email'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  phone
                </div>
                <div class="col-sm-4">
                  <input type="text" name="mem_tel" required class="form-control"  placeholder="phone" value="<?php echo set_value('mem_tel'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_tel'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  IMG
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