<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form
        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">form</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form action="" method="post" class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-2 control-label">
                    select option
                  </div>
                  <div class="col-sm-3">
                    <select name="myselect" class="form-control" required>
                      <option value="ชาย">ชาย</option>
                      <option value="หญิง">หญิง</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">
                    radio button
                  </div>
                  <div class="col-sm-5">
                        <input type="radio" name="gender" value="male"> Male  
                        <input type="radio" name="gender" value="female"> Female 
                        <input type="radio" name="gender" value="other"> Other 
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">
                    check box
                  </div>
                  <div class="col-sm-5">
                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                        <input type="checkbox" name="vehicle2" value="Car"> I have a car<br>
                        <input type="checkbox" name="vehicle3" value="Boat"> I have a boat<br>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">
                    input type text
                  </div>
                  <div class="col-sm-5">
                    <input type="text" name="mytxt" class="form-control" required placeholder="input type text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">
                    input type text pattern
                  </div>
                  <div class="col-sm-5">
                    <input type="text" name="mytxt" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" class="form-control" required placeholder="input type text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">
                    input type number
                  </div>
                  <div class="col-sm-5">
                    <input type="number" min="0" name="mynumb" class="form-control" required placeholder="input type number ห้ามต่ำกว่า  0">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">
                    input type date
                  </div>
                  <div class="col-sm-5">
                    <input type="date"  name="mydate" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">
                    input type date ห้ามเลือกย้อนหลัง
                  </div>
                  <div class="col-sm-5">
                    <input type="date" min="<?php echo date('Y-m-d');?>"  name="mydate" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label"> 
                  </div>
                  <div class="col-sm-5">
                   <button type="submit" class="btn btn-primary">SAVE</button>
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