<?php
 extract($_POST);
 $epro=$_GET['epro'];
 $sel=mysqli_query($con,"select * from product where id=$epro");
 $arr=mysqli_fetch_assoc($sel);
  if(isset($_POST['sub']))
 {
     $tmp=$_FILES['att']['tmp_name'];
     $fn=$_FILES['att']['name'];
     $ext=pathinfo($fn, PATHINFO_EXTENSION);
     if(empty($fn))
     {
         if(mysqli_query($con,"UPDATE `product` SET `mob_name`='$mob_name',`price`='$price',`quantity`='$quantity',`color`='$color',`ram`='$ram',`rom`='$rom',`os`='$os',`features`='$features',`updated_at`=NOW() WHERE id=$epro"))
         {
             echo "<script>
              location.href='?con=products'
              </script>";
         }
     }
     else
     {
        if($ext=="png" || $ext=="jpg")
     {
         $fnn=rand()."-".time().".$ext";
         if(move_uploaded_file($tmp,"images/attach/".$fnn))
         {
           if(mysqli_query($con,"UPDATE `product` SET `mob_name`='$mob_name',`price`='$price',`quantity`='$quantity',`color`='$color',`ram`='$ram',`rom`='$rom',`os`='$os',`features`='$features',`image`='$fnn',`updated_at`=NOW() WHERE id=$epro"))
           {
                unlink("images/attach/".$arr['image']);
                echo "<script>
                    location.href='?con=products' 
                    </script>";
           }
           else
           {
               $errMsg="Not Updated";
           }
         }
         else
         {
             $errMsg="Uploading error";
         }
     }
    else
    {
        $errMsg="Only Jpg or Png supported";
    }
 }
} 
?>
<h1>Edit Product</h1>
<form method="post" enctype="multipart/form-data">
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
  <label>Mobile Name</label>
  <input type="text" name="mob_name" class="form-control" value="<?= $arr['mob_name'];?>" required>
 </div>
 <div class="form-group">
  <label>Price</label>
  <input type="text" name="price" class="form-control" value="<?= $arr['price'];?>" required >  
 </div>
 <div class="form-group">
  <label>Quantity</label>
  <input type="text" name="quantity" class="form-control" value="<?= $arr['quantity'];?>" required>
  </div>  
 <div class="form-group">
  <label>Color</label>
  <input type="text" name="color" class="form-control" value="<?= $arr['color'];?>" required>  
 </div>
 <div class="form-group">
  <label>RAM</label>
  <input type="text" name="ram" class="form-control" value="<?= $arr['ram'];?>" required>  
 </div>
 <div class="form-group">
  <label>ROM</label>
  <input type="text" name="rom" class="form-control" value="<?= $arr['rom'];?>" required>  
 </div>
 <div class="form-group">
  <label>OS</label>
  <input type="text" name="os" class="form-control" value="<?= $arr['os'];?>" required>  
 </div>
 <div class="form-group">
  <label>Features</label>
  <textarea name="features" class="form-control"  required>   
  <?= $arr['features'];?>
  </textarea>
 </div>
 <div class="form-group">
  <label>Image</label>
  <input type="file" name="att" class="form-control">
 </div>
 <input type="submit" value="Submit" name="sub" class="btn btn-success"/>
</form>

