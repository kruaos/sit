<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
     <?php echo link_tag('bt4/css/bootstrap.min.css'); ?>
     <?php echo link_tag('bt4/css/mystyle.css'); ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title><?php echo $rsprd->p_name;?></title>
  <meta name="description" content="สอนทำเว็บไซต์"/>
  <meta name="keywords" content="สอน, ทำเว็บ, เว็บไซต์, สอน"/>
  <meta property="og:type" content="product" />
  <meta property="og:title" content="<?php echo $rsprd->p_name;?>" />
  <meta property="og:description" content="<?php echo $rsprd->p_name;?>" />
  <meta property="og:image" content="<?php echo base_url('p_img/'.$rsprd->p_img);?>" />
  <meta property="og:url" content="<?php echo site_url('homepage/p/'.$rsprd->p_id);?>" />
  <meta property="og:site_name" content="devbanban" />
  <meta property="og:image:secure_url" content="<?php echo base_url('p_img/'.$rsprd->p_img);?>" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="800" />
  <meta property="og:locale" content="th_TH" />
  <meta property="og:image:alt" content="<?php echo $rsprd->p_name;?>" />
  <meta name="google-site-verification" content="" />
  <meta name="author" content="devbanban" />
  <meta name="robots" content="" />
    <!—- ShareThis BEGIN -—>
<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5d577c19c60153001277b8f1&product="sticky-share-buttons"></script>
<!—- ShareThis END -—>
  </head>
  <body>