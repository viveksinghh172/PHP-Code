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
           if(mysqli_query($con,"insert into category(category,description,image) values('$category','$description','$fnn')") or die("Mysql error"))
           {
               //header("location:?con=category");
               echo "<script>
                    location.href='?con=category'
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
<h1>Add Category</h1>
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
  <input type="text" name="category" class="form-control" required>
 </div>
 <div class="form-group">
  <label>Description</label>
  <textarea  name="description" class="form-control" required>
  </textarea>
 </div>
 <div class="form-group">
  <label>Image</label>
  <input type="file" name="att" class="form-control" required>
 </div>
 <input type="submit" value="Submit" name="sub" class="btn btn-success"/>
</form>