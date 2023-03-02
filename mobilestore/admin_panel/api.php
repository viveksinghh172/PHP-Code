<?php
session_start();
$ssid=session_id();
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

  //for del category
   if(isset($_POST['delpro']))
   {
       $pid=$_POST['delpro'];
       if(mysqli_query($con,"delete from product where id=$pid"))
       {
           echo "Product Deleted";
       }
       else
       {
           echo "Product not deleted";
       }
   }
   //for add cart
   if(isset($_POST['addcart']))
   {
       $pid=$_POST['pid'];
       $quan=$_POST['quan'];
       $sel=mysqli_query($con,"select pid,sid,quantity from tempcart where sid='$ssid' && pid=$pid");
       if(mysqli_num_rows($sel)>0)
       {
          $arr=mysqli_fetch_assoc($sel);
          $quan+=$arr['quantity'];
          mysqli_query($con,"update tempcart set quantity=$quan where sid='$ssid' && pid=$pid");
          echo "Add cart sussfully";
       }
        else
        {
            if(mysqli_query($con,"insert into tempcart(pid,sid,quantity) values($pid,'$ssid',$quan)"))
            {
                echo "Add cart sussfully";
            }
            else
            {
                echo "Error";
            }
        }
       
   }
?>