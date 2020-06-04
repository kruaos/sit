<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    จัดการสินค้า
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">รายการสินค้า</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <h1>Form Add prd</h1>
            <form action="<?php echo site_url('prd/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
               <div class="form-group row">
                <div class="col-sm-2 control-label">
                  ประเภท
                </div>
                <div class="col-sm-2">
                  <select name="t_id" class="form-control" required>
                    <option value="">-เลือก-</option>

                    <?php foreach($query as $rs){ ?>
                    <option value="<?php echo $rs->t_id;?>">-<?php echo $rs->t_name;?>-</option>
                    <?php } ?>


                  </select>
                  <span class="fr">
                  <?php echo form_error('t_id'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  ชื่อสินค้า
                </div>
                <div class="col-sm-4">
                  <input type="text" name="p_name" class="form-control" placeholder="ชื่อสินค้า" required minlength="3" value="<?php echo set_value('p_name'); ?>">
                  <span class="fr">
                  <?php echo form_error('p_name'); ?>
                </span>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  รายละเอียด
                </div>
                <div class="col-sm-8">
                  <textarea  name="p_detail"  class="ckeditor"  rows="10" cols="60" required></textarea>
                  <span class="fr">
                  <?php echo form_error('p_detail'); ?>
                </span>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  ราคา
                </div>
                <div class="col-sm-2">
                  <input type="number" name="p_price" class="form-control" required min="0"  value="<?php echo set_value('p_price'); ?>">
                  <span class="fr">
                  <?php echo form_error('p_price'); ?>
                </span>
                </div>
                <div class="col-sm-1 control-label">
                  บาท
                </div>
              </div>
            
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  หน่วย
                </div>
                <div class="col-sm-2">
                  <select name="p_unit" class="form-control" required>
                    <option value="">-เลือก-</option>
                    <option value="ชิ้น">-ชิ้น-</option>
                    <option value="แพ็ค">-แพ็ค-</option>
                    <span class="fr">
                  <?php echo form_error('p_unit'); ?>
                </span>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  IMG
                </div>
                <div class="col-sm-4">
                  <input type="file" name="p_img" required class="form-control" accept="image/*">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4">
                  <input type="hidden" name="mem_id" value="<?php echo $_SESSION['mem_id'];?>">
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