<!--start  product -->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12">
      <h3>
      ::List Product::

      
          รวมคลิปปรับพืนฐาน Codeigniter
          <a href="https://www.youtube.com/playlist?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6" target="_blank">  Click...</a>

      </h3>
    </div>
    <?php foreach($rsprd as $rs){ ?>
    <div class="col-12 col-sm-4 col-md-4" style="margin-bottom: 20px;">
      <div class="card" style="width: 18rem;">
        <a href="<?php echo site_url('homepage/p/'.$rs->p_id);?>">
        <img src="<?php echo base_url('p_img/'.$rs->p_img);?>" class="card-img-top" alt="...">
      </a>
        <div class="card-body">
          <h5 class="card-title"><?php echo $rs->p_name;?></h5>
          <p class="card-text"> 
            <font color="red">
            Price <?php echo number_format($rs->p_price,2);?>  Baht
          </font>
        </p>
          <a href="<?php echo site_url('homepage/p/'.$rs->p_id);?>" class="btn btn-primary btn-xs">Read more...</a>

          <a href="<?php echo site_url('detail/'.$rs->p_id);?>" class="btn btn-info btn-xs">Read more...</a>

        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>
<!--end  product -->