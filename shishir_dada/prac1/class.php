<?php
class Details
{ 
   var $id;
   var $link;
   var $msg;
   function __construct()
   {
       $this->link=mysqli_connect("localhost","root","","prac1") or die("Not connect");
   }
   function addInfo($fname,$lname,$about)
   {
      $ext=pathinfo($_FILES['att']['name'], PATHINFO_EXTENSION);;
      $fn=rand()."-".time().".$ext";
      if(move_uploaded_file($_FILES['att']['tmp_name'],"attach/$fn"))
      {
        if(mysqli_query($this->link,"insert into details(fname,lname,about,image) values('$fname','$lname','$about','$fn')"))
        {
            // $this->msg="Details Added";
            header("location:index.php");
           
        }
        else
        {
            $this->msg="Details Already Added";

        }
      }
      else
      {
        $this->msg="Uploading Error";
      }
   }

   function fetchCat()
   {
      $sel=mysqli_query($this->link,"select * from details");
      $myarray=[];
      while($arr=mysqli_fetch_assoc($sel))
      {
        array_push($myarray,$arr);
      }
      return $myarray;
   }
   function del($sql)
    { 
      mysqli_query($this->link,"delete from Details where id='$sql'");
    }
   function update_select($sql)
   {
      $sel=mysqli_query($this->link,"select * from details where id='$sql'");
      $myarray=[];
      while($arr=mysqli_fetch_assoc($sel))
      {
        array_push($myarray,$arr);
      }
      return $myarray;
   }
    function update_entry($fname,$lname,$about,$sql)
   {
      $ext=pathinfo($_FILES['att']['name'], PATHINFO_EXTENSION);;
      $fn=rand()."-".time().".$ext";
      if(move_uploaded_file($_FILES['att']['tmp_name'],"attach/$fn"))
      {
        if(mysqli_query($this->link,"UPDATE `details` SET `firstname`='$fname',`lastname`= '$lname', `lastname`,image='$fn' WHERE id='$sql'"))
          // if(mysqli_query($this->link,"update blog set (title='$tit',description='$desp',image='$fn') where id='1'"))
        {
            // $this->msg="Blog Added";
            header("location:index.php");
           
        }
        else
        { 

            $this->msg="Detail Already Added";

        }
      }
      else
      {
        $this->msg="Uploading Error";
      }
   }
  }
?>