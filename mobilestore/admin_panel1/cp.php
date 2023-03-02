<?php
extract($_POST);
if(isset($sub))
{
    if($cp==$np)
    {
      $sel=mysqli_query($con,"select password from admin where email='$semail'");
      $arr=mysqli_fetch_assoc($sel);
      $upass=$arr['password'];
      if($upass==sha1($op))
      {
          if($op==$np)
          {
              $errMsg="New pass and old pass is not same";
          }
          else
          {
              $np=sha1($np);
              if(mysqli_query($con,"update admin set password='$np' where email='$semail'"))
              {
                  $sussMsg="Password Change successfully";
              }
          }
      }
      else
       {
        $errMsg="Old pass is not correct";
       }
    }
    else
   {
       $errMsg="New pass and con pass is not match";
   }
}
?>
<h2>Change Password</h2>
<form method="post">
  <?php
  if(isset($errMsg))
  {
    ?>
  <div class="alert alert-danger"><?= $errMsg;?></div>
    <?php
  }
  ?>
  <?php
  if(isset($sussMsg))
  {
    ?>
  <div class="alert alert-success"><?= $sussMsg;?></div>
    <?php
  }
  ?>
 <div class="form-group">
  <label>Old Password</label>
  <input type="password" name="op" class="form-control" required>
 </div>
 <div class="form-group">
  <label>New Password</label>
  <input type="password" name="np" class="form-control" required>
 </div>
 <div class="form-group">
  <label>Con Password</label>
  <input type="password" name="cp" class="form-control" required>
 </div>
 <input type="submit" value="Change" name="sub" class="btn btn-success"/>
</form>