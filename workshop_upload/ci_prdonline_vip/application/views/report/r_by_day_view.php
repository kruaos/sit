<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Report นับจำนวนการเข้าชมเว็บไซต์ แยกตาม<?php echo $_GET['t'];?>
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
            <p align="center">
              <canvas id="myChart" width="800px" height="200px"></canvas>
              <script>
              var ctx = document.getElementById("myChart").getContext('2d');
              var myChart = new Chart(ctx, {
              type: 'line',
              data: {
              labels: [
              <?php
              $i=0;
              foreach ($rsbyday as $r) {
              if($i>0){echo ',';}
              //echo "'".$r->date."'";
              echo "'".date('d-M-Y',strtotime($r->datesave))."'";
              $i++;
              } ?>
              
              ],
              datasets: [{
              label: 'จำนวนการเข้าชมแยกตาม<?php echo $_GET['t'];?>',
              data: [
              <?php
              $i=0;
              foreach ($rsbyday as $r) {
              if($i>0){echo ',';}
              echo "'".$r->total."'";
              $i++;
              } ?>
              ],
              backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
              }]
              },
              options: {
              scales: {
              yAxes: [{
              ticks: {
              beginAtZero:true
              }
              }]
              }
              }
              });
              </script>
            </p>
            <div class="col-xs-5">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="danger">
                    <th width="5%">#</th>
                    <th width="45%">ว/ด/ป</th>
                    <th width="20%">จำนวน</th>
                    <th width="30%">หน่วย</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($rsbyday as $bd){ ?>
                  <tr>
                    <td><?php echo @$i +=1 ;?></td>
                    <td><?php echo $bd->datesave;?></td>
                    <td align="center"><?php echo $bd->total;?></td>
                    <td>ครั้ง</td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
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