
<!--start  form login -->
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
      <h1>Form Register</h1>
          <form action="<?php echo site_url('register/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="form-group row">
                <div class="col-sm-2 ">
                  username
                </div>
                <div class="col-sm-4">
                  <input type="text" name="mem_username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" class="form-control" placeholder="email" required minlength="3" value="<?php echo set_value('mem_username'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_username'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 ">
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
                <div class="col-sm-2 ">
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
              <div class="form-group row">
                <div class="col-sm-2 ">ชื่อ</div>
                <div class="col-sm-3">
                  <input type="text" name="mem_name" class="form-control" required minlength="3" placeholder="ชื่อ" value="<?php echo set_value('mem_name'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_name'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 ">นามสกุล</div>
                <div class="col-sm-3">
                  <input type="text" name="mem_lname" class="form-control" required minlength="3" placeholder="นามสกุล" value="<?php echo set_value('mem_lname'); ?>">
                  <span class="fr">
                  <?php echo form_error('mem_lname'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 ">
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
                <div class="col-sm-2 ">
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
                <div class="col-sm-2 ">
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
  </div>
</div>
<!--end  form login -->