<?php

    require("./config/db.php");
    
        extract($_POST);
        if (isset($regis)) 
        {
            // echo "<pre>";
            // print_r($_POST);

            $name=$_FILES['my_pic']['name'];
            $ext=end(explode('.', $name));

            if ($ext=="png" or $ext=="jpg" or $ext=="jpeg")
             {
                if (move_uploaded_file($_FILES['my_pic']['tmp_name'], "upload/email_id.png")) 
                {
                   $sql="INSERT INTO `registration`(`cli_id`, `f_name`, `l_name`, `mobile_no`, `email_id`, `password`, `pic`) VALUES ('NULL','$f_name','$l_name','$mob_no','$email_id','$pass','$email_id')";
                   if(mysqli_query($way,$sql))
                   {
                    header("location:?con=login");  
                   }
                   else
                   {
                     $msg="registraion not successfully";
                   }
                }
                else
                {
                    $msg="file does not upload";
                }
             }
             else
             {
                $msg="extention does not support";
             }
        }

?>



<div class="container-fluid signupcontainer">
<div class="row">
 	<div class="col-md-3"></div>
 	<div class="col-md-6">
 		            <!-- Default form register -->
<form class="text-center  border-light p-5" method="post" enctype="multipart/form-data">
  	<h3 class="headpara">Online Quiz Portal</h3>
    <p class="mb-7">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="f_name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="l_name">
        </div>
    </div>
        <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="mob_no">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>


    <!-- E-mail -->
    <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email_id">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pass">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    <input type="file" name="my_pic">

    <!-- Sign up button -->
    <input class="btn btn-info my-4 btn-block" type="submit" value="Register" name="regis">

    <!-- Social register -->
    <p>or sign up with:</p>

    <a type="button" class="light-blue-text mx-2">
        <i class="fa fa-facebook"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fa fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fa fa-linkedin"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fa fa-github"></i>
    </a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a> and
        <a href="" target="_blank">terms of service</a>. </p>
</form>
<!-- Default form register -->
 	</div>
 	<div class="col-md-3"></div>
</div>
</div>