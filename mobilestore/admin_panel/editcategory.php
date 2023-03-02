<?php
 extract($_POST);
 $ecat=$_GET['ecat'];
 $sel=mysqli_query($con,"select * from category where id=$ecat");
 $arr=mysqli_fetch_assoc($sel);
 if(isset($_POST['sub']))
 {
     $tmp=$_FILES['att']['tmp_name'];
     $fn=$_FILES['att']['name'];
     $ext=pathinfo($fn, PATHINFO_EXTENSION);
     if(empty($fn))
     {
         if(mysqli_query($con,"update category set category='$category',description='$description',updated_at=NOW() where id=$ecat"))
         {
             echo "<script>
              location.href='?con=category'
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
           if(mysqli_query($con,"update category set category='$category',description='$description',image='$fnn',updated_at=NOW() where id=$ecat"))
           {
                unlink("images/attach/".$arr['image']);
               //header("location:?con=category");
               echo "<script>
                    location.href='?con=category'
                    </script>";
           }
           else
           {
               $errMsg="Not updated";
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
<h1>Edit Category</h1>
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
  <input type="text" name="category" class="form-control" required value="<?= $arr['category'];?>">
 </div>
 <div class="form-group">
  <label>Description</label>
  <textarea  name="description" class="form-control" required>
  <?= $arr['description'];?>
  </textarea>
 </div>
 <div class="form-group">
  <label>Image</label>
  <input type="file" name="att" class="form-control">
 </div>
 <input type="submit" value="Submit" name="sub" class="btn btn-success"/>
</form>