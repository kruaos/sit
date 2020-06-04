  <!--start  footer -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
          <p align="center" class="myfooter"> @2019  <br>
            ระบบนี้แจกให้กลุ่มคอร์สออนไลน์ devbanbanVIP ไว้ศึกษาและพัฒนาต่อยอด 20 ตุลาคม 2562 
            โดย นายพิศิษฐ์ บวรเลิศสุธี 
            <br>
            สนับสนุนได้ที่ 
            <a href="https://devbanban.com/?page_id=2309" target="_blank"> สนับสนุน </a>
            <br>
          รวมคลิปปรับพืนฐาน Codeigniter
          <a href="https://www.youtube.com/playlist?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6" target="_blank">  Click...</a>
          </p>
        </div>
      </div>
    </div>
    <!--end  footer -->


  </body>
</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url(); ?>bt4/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo base_url(); ?>bt4/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>bt4/js/bootstrap.min.js"></script>


<script type="text/javascript">
  <?php if ($this->session->flashdata('save_success')): ?>
  swal("", "บันทึกข้อมูลเรียบร้อยแล้ว", "success");
   <?php endif; ?>


   <?php if ($this->session->flashdata('regis_success')): ?>
  swal("", "สมัครสมาชิกเรียบร้อยแล้ว กรุณา Login เข้าใช้งานระบบ", "success");
   <?php endif; ?>


   <?php if ($this->session->flashdata('warning')): ?>
  swal("", "ข้อมูลซ้ำ!!!", "warning");
   <?php endif; ?>

   <?php if ($this->session->flashdata('wrong_alert')): ?>
  swal("", "เกิดข้อผิดพลาด!!!", "warning");
   <?php endif; ?>

   <?php if ($this->session->flashdata('del_success')): ?>
  swal("", "ลบข้อมูลเรียบร้อยแล้ว", "success");
   <?php endif; ?>
</script>