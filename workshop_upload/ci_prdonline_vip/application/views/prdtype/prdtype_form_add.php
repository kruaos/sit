<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    จัดการประเภทสินค้า
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">รายการประเภทสินค้า</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form action="<?php echo site_url('prdtype/form_save');?>" method="post" class="form-horizontal">

              <div class="form-group row">
                <div class="col-sm-2 control-label">
                </div>
                <div class="col-sm-4">
                  <h3>Form Product Type</h3>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  ชื่อประเภทสินค้า
                </div>
                <div class="col-sm-4">
                  <input type="text" name="t_name" class="form-control" placeholder="ชื่อสิทธิการใช้งาน" required minlength="3" value="<?php echo set_value('t_name'); ?>">
                  <span class="fr">
                  <?php echo form_error('t_name'); ?>
                </span>
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