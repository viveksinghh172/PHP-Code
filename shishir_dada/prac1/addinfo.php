<?php

include("class.php");
$obj=new Details;
extract($_POST);
if(isset($sub))
{
    $obj->addinfo($fname,$lname,$about);
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

    <body style="background-color: pink;">

    	<div class="container">

        <?php
           if(isset($obj->msg))
           {
               echo $obj->msg;
           }
        ?>

        <center><h2>Add Your Details</h2></center>
         <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" name="fname" class="form-control" placeholder="First name">
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" class="form-control" placeholder="Last name">
            </div>
            <div class="form-group">
              <label for="about">About</label>
              <input type="text" name="about" class="form-control" style="height: 60px;">
            </div>

            <div class="form-group">
                <select name="list" style="width: 100%; height: 40px;">
                    <option>Choose Your ID Type</option>
                    <option value="Aadhar Card">Aadhar Card</option>
                    <option value="Pan Card">Pan Card</option>
                    <option value="Voter ID">Voter ID</option>
                    <option value="Others">Others</option>

                </select>
           
             </div>   
            
            <div class="form-group">
              <input type="file" name="att" class="form-control">
            </div>
            <input type="submit" value="Submit" name="sub" class="btn btn-success">
         </form>
    		
    	</div>
    	
    </body>
</html>