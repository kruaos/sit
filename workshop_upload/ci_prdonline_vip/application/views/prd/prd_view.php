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
              <a href="<?php echo site_url('prd/form_add');?>" class="btn btn-success"> +สินค้า </a>
              <a href="<?php echo site_url('prd');?>" class="btn btn-default"> Refresh Data </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr class="danger">
                  <th width="5%">ID</th>
                  <th width="10%">IMG</th>
                  <th width="10%">ประเภท</th>
                  <th width="40%">ชื่อสินค้า</th>
                  <th width="10%">status</th>
                  <th width="10%"><center>ราคา</center></th>
                  <th width="10%"><center>QTY</center></th>
                  <th width="10%"><center>View</center></th>
                  <th width="5%">แก้ไข</th>
                
                </tr>
                </thead>

                <tbody>
                  <?php foreach($rsprd as $rs){ ?>
                <tr>
                  <td><?php echo $rs->p_id;?></td>
                  <td>
                    <a href="<?php echo base_url('p_img/'.$rs->p_img);?>" target="_blank">
                    <img src="<?php echo base_url('p_img/'.$rs->p_img);?>" width="100%">
                  </a>

                  </td>
                  <td><?php echo $rs->t_name;?></td>
                  <td>
                    <?php 
                    echo '<b>'.$rs->p_name.'</b><br>';
                    echo 'เพิ่มโดย '.$rs->mem_name;
                    echo '<br>';
                    echo $rs->datesave;
                    ?> 
                    </td>
                  <td>
                    <?php 
                    $st = $rs->p_status;
                    if($st==1){
                      echo '<font color="green">';
                      echo 'แสดง';
                      echo '</font>';
                    }else{
                      echo '<font color="red">';
                      echo 'ปิดการแสดง';
                      echo '</font>';
                    }
                    ?>
                      
                    </td>
                  <td align="right"><?php echo number_format($rs->p_price,2);?></td>
                  <td align="center"><?php echo $rs->p_qty;?></td>
                  <td align="center"><?php echo $rs->p_view;?></td>
                   <td><a href="<?php echo site_url('prd/edit/'.$rs->p_id);?>" class="btn btn-warning btn-xs"> แก้ไข</a></td>
              
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