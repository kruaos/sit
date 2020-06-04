<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
$mlevel = $_SESSION['l_id'];
if($mlevel==1){
  $mylink = 'admin';
}else{
  $mylink = 'staff';
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript"> 
/*
function disableselect(e){  
return false  
}  

function reEnable(){  
return true  
}  

//if IE4+  
document.onselectstart=new Function ("return false")  
document.oncontextmenu=new Function ("return false")  
//if NS6  
if (window.sidebar){  
document.onmousedown=disableselect  
document.onclick=reEnable  
}
*/
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Backend</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php echo link_tag('bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>
  <!-- Font Awesome -->
   <?php echo link_tag('bower_components/font-awesome/css/font-awesome.min.css'); ?>
  <!-- Ionicons -->
   <?php echo link_tag('bower_components/Ionicons/css/ionicons.min.css'); ?>
  <!-- DataTables -->
   <?php echo link_tag('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>
  <!-- Theme style -->
   <?php echo link_tag('dist/css/AdminLTE.min.css'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?php echo link_tag('dist/css/skins/_all-skins.min.css'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <!-- ckeditor-->
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
    .fr{color: red;}
    </style>

    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $mylink;?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>My</b>Backend</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>My</b>Backend</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('uploads/'.$_SESSION['img']);?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['mem_name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('uploads/'.$_SESSION['img']);?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['mem_name'];?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('staff/profile');?>" class="btn btn-primary btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('home/logout');?>" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่??');" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('uploads/'.$_SESSION['img']);?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['mem_name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php 
        
        if($mlevel==1){ ?>

           <li><a href="<?php echo site_url('admin');?>"><i class="fa fa-home"></i> <span>HOME</span></a></li>
           <li><a href="<?php echo site_url('mylevel');?>"><i class="fa fa-edit"></i> <span>สิทธิ์การใช้งาน</span></a></li>
          <li><a href="<?php echo site_url('member');?>"><i class="fa fa-edit"></i> <span>สมาชิก</span></a></li>
          <li><a href="<?php echo site_url('prdtype');?>"><i class="fa fa-edit"></i> <span>ประเภท</span></a></li>
          <li><a href="<?php echo site_url('prd');?>"><i class="fa fa-edit"></i> <span>สินค้า</span></a></li>
           <li><a href="<?php echo site_url('Inputpattern');?>"><i class="fa fa-edit"></i> <span>pattern</span></a></li>
            <li><a href="<?php echo site_url('report?t=วัน');?>"><i class="fa fa-edit"></i> <span>รายงานแยกตามวัน</span></a></li>
            <li><a href="<?php echo site_url('report/m?t=เดือน');?>"><i class="fa fa-edit"></i> <span>รายงานแยกตามเดือน</span></a></li>
            <li><a href="<?php echo site_url('report/m2?t=เดือน');?>"><i class="fa fa-edit"></i> <span>แยกตามเดือน (กราฟวงกลม) </span></a></li>
            <li><a href="<?php echo site_url('report/y?t=ปี');?>"><i class="fa fa-edit"></i> <span>รายงานแยกตามปี</span></a></li>
              <li><a href="<?php echo site_url('report/y2?t=ปี');?>"><i class="fa fa-edit"></i> <span>แยกตามปี (กราฟวงกลม)</span></a></li>

        <?php }else{?>

          <li><a href="<?php echo site_url('staff');?>"><i class="fa fa-home"></i> <span>HOME</span></a></li>
          <li><a href="<?php echo site_url('staff/profile');?>"><i class="fa fa-home"></i> <span>profile</span></a></li>
          <li><a href="<?php echo site_url('staff/pwd');?>"><i class="fa fa-home"></i> <span>Reset PWD</span></a></li>
          <li><a href="<?php echo site_url('mprd');?>"><i class="fa fa-edit"></i> <span>สินค้า</span></a></li>

        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>












