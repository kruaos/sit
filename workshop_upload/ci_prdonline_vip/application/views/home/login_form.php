
<!--start  form login -->
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
     <h1> User & pass ดูที่ tbl_member คอลัมภ์ mem_username </h1>
      <form action="<?php echo site_url('home/authen');?>" method="post" class="form-horizontal">
        <div class="form-group row">
          <div class="col-sm-2">
            user
          </div>
          <div class="col-sm-3">
            <input type="text" name="mem_username" class="form-control" placeholder="email" required minlength="3">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            password
          </div>
          <div class="col-sm-3">
            <input type="password" name="mem_password" class="form-control" placeholder="password" required minlength="3">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
<!--end  form login -->