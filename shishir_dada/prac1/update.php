<?php
include("class.php");
$obj=new Details;
$data=$obj->update_select($_GET['update_id']);

echo "Id is ".$_GET['update_id'];
if (isset($_GET['update_id'])) 
{
  $obj->update_select($_GET['update_id']);
}
extract($_POST);
   if (isset($sub))
   {
      $obj->update_entry($fname,$lname,$about,$_GET['update_id']);     
   }

foreach($data as $d)
{

}
?>
<!DOCTYPE html>
 <html>
     <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.3/css/mdb.min.css" rel="stylesheet">

         <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.3/js/mdb.min.js"></script>
     </head>
     <body>
         <div class="container">
             <?php
   if(isset($obj->msg))
   {
       echo $obj->msg;
   }
 ?>
   <h2>Update Category</h2>
         <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="first name">First Name</label>
              <input type="text" name="fname" value="<?= $d['fname'];?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="last name">Last Name</label>
              <input type="text" name="lname" value="<?= $d['lname'];?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="about">About</label>
              <input type="text" name="about" value="<?= $d['about'];?>" class="form-control">
            </div>
            <table class="table">
              <tr>
                <td>
                  <h1>Old image</h1>
                  <img src="attach/<?= $d['image'];?>" height="100" width="120" >
                </td>
              </tr>
            </table>
            <div class="form-group">
              <label for="Image">Image</label>
              <input type="file" name="att" class="form-control">
            </div>
            <input type="submit" value="Update" name="sub" class="btn btn-success">
         </form>
        
            
        </div>
     </body>
 </html>