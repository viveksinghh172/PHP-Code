<?php
  include('head.php');
  include('config/database.php');
  extract($_POST);
  if(isset($login))
  {
      $ulogin=mysqli_real_escape_string($con,htmlentities(trim($ulogin)));
      $password=mysqli_real_escape_string($con,htmlentities(trim($password)));
      $password=sha1($password);
      $sel=mysqli_query($con,"select * from admin where (email='$ulogin' or uname='$ulogin') and password='$password'");
      $arr=mysqli_fetch_array($sel);
      if(mysqli_num_rows($sel)>0)
      {
          session_start();
          $_SESSION['suname']=$arr['uname'];
          $_SESSION['semail']=$arr['email'];
          header("location:dashboard.php");
      }
      else
      {
          $errMsg="Enter correct login credentials";
      }
  }
?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="images/logo.svg">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
             <?php
       if(isset($errMsg))
       {
         ?>
     <div class="alert alert-danger">
      <?= $errMsg;?>
     </div>
         <?php
       }
      ?>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username or email" name="ulogin" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required>
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN" name="login"/>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>
<?php
  include('foot.php');
?>