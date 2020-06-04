<!--start  product -->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12">
      <h3>
      ::Product Detail::
      </h3>
    </div>
    <div class="col-12 col-sm-4 col-md-4">
      <img src="<?php echo base_url('p_img/'.$rsprd->p_img);?>" width="100%">
    </div>
    <div class="col-12 col-sm-8 col-md-8">
      <b>
        ชื่อสินค้า : <?php echo $rsprd->p_name;?>
        <br>
        ราคา : <?php echo number_format($rsprd->p_price,2);?> บาท 
        <br>
        สต๊อก  : <?php 

        $pqtyp =$rsprd->p_qty;
        if($pqtyp > 0){
        echo $rsprd->p_qty. ' '.$rsprd->p_unit;
        }else{
          echo '<font color="red">สินค้าหมด</font>'; 
        }
      ?>
      </b>
      <p>
        <b>รายละเอียดสินค้า</b>
        <?php echo $rsprd->p_detail;?>
        <b>จำนวนการเข้าชม <?php echo $rsprd->p_view;?> ครั้ง </b>
        <br>
          <div class="sharethis-inline-share-buttons"></div>

          <?php echo $_SERVER['REMOTE_ADDR'];?>
      </p>
    </div>
  </div>
</div>
<!--end  product -->