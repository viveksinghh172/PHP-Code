<?php
  include("config/database.php");
  //for del category
   if(isset($_POST['delcat']))
   {
       $cid=$_POST['delcat'];
       if(mysqli_query($con,"delete from category where id=$cid"))
       {
           echo "Category Deleted";
       }
       else
       {
           echo "Category not deleted";
       }
   }
?>