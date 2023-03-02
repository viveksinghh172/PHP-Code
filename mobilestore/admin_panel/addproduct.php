<?php
 extract($_POST);
 if(isset($_POST['sub']))
 {
     $tmp=$_FILES['att']['tmp_name'];
     $fn=$_FILES['att']['name'];
     $ext=pathinfo($fn, PATHINFO_EXTENSION);
     //echo $ext;
     if($ext=="png" || $ext=="jpg")
     {
         $fnn=rand()."-".time().".$ext";
         if(move_uploaded_file($tmp,"images/attach/".$fnn))
         {
           if(mysqli_query($con,"INSERT INTO `product`(`id`, `category`, `mob_name`, `price`, `quantity`, `color`, `ram`, `rom`, `os`, `features`, `image`) VALUES ('NULL','$category','$mob_name','$price','$quantity','$color','$ram','$rom','$os','$features','$fnn')") or die("Mysql error"))
           {
               //header("location:?con=category");
               echo "<script>
                    location.href='?con=products' 
                    </script>";
           }
           else
           {
               $errMsg="Already exists";
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
?>
<h1>Add Product</h1>
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
  <label>Category</label>
  <select class="form-control" name="category">
      <?php
      $sel=mysqli_query($con,"select category from category");
      while ($arr=mysqli_fetch_assoc($sel)) 
      {
        ?>
       <option value="<?=$arr['category'];?>"><?=$arr['category'];?></option> 
       <?php
      }
      ?>
    
  </select> 
 </div>
 <div class="form-group">
  <label>Mobile Name</label>
  <input type="text" name="mob_name" class="form-control" required>  
 </div>
 <div class="form-group">
  <label>Price</label>
  <input type="text" name="price" class="form-control" required>  
 </div>
 <div class="form-group">
  <label>Quantity</label>
  <input type="text" name="quantity" class="form-control" required>  
 <div class="form-group">
  <label>Color</label>
  <input type="text" name="color" class="form-control" required>  
 </div>
 <div class="form-group">
  <label>RAM</label>
  <input type="text" name="ram" class="form-control" required>  
 </div>
 <div class="form-group">
  <label>ROM</label>
  <input type="text" name="rom" class="form-control" required>  
 </div>
 <div class="form-group">
  <label>OS</label>
  <input type="text" name="os" class="form-control" required>  
 </div>
 <div class="form-group">
  <label>Features</label>
  <textarea name="features" class="form-control" required>  </textarea>
 </div>
 <div class="form-group">
  <label>Image</label>
  <input type="file" name="att" class="form-control" required>
 </div>
 <input type="submit" value="Submit" name="sub" class="btn btn-success"/>
</form>