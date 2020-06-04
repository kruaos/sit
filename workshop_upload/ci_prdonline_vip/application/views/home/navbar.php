
<!--start  menu -->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url('');?>">Myweb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Register');?>">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('home');?>">Login</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ประเภทสินค้า
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach($query as $ptype){ ?>
                <a class="dropdown-item" href="<?php echo site_url('cat/'.$ptype->t_id);?>"><?php echo $ptype->t_name;?></a>
              <?php } ?>


              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form action="<?php echo site_url('homepage/search');?>" class="form-inline my-2 my-lg-0" method="get">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="q" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
  </div>
</div>
<!--end  menu -->