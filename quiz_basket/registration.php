
<?php

require('./config/db.php');
// include('./config/db.php');
extract($_POST);
if(isset($regis))
{
	// echo "<pre>";
	// print_r($_POST);
		$name=$_FILES['my_pic']['name'];
		
		$ext=end(explode('.', $name));

		if($ext=="png" or $ext=="PNG" or $ext=="jpg" or $ext=="jpeg")
		{
			if(move_uploaded_file($_FILES['my_pic']['tmp_name'], "upload_pic/$email_id.png"))
			{
				$sql="INSERT INTO `registration`(`cli_id`, `f_name`, `l_name`, `mobile_no`, `email_id`, `password`, `pic`) VALUES ('NULL','$f_name','$l_name','$mob_no','$email_id','$pass','$email_id')";
				 if(mysqli_query($way,$sql))
				 {
				 		//$msg="Registration Successfully";
				 			header("location:?con=login");
				 }
				 else
				 {
				 	$msg="Registration Not Successfully";
				 }
			}
			else
			{
				$msg= "File doesnot upload";
			}
		}
		else
		{
			$msg= "Extenstion does not Support .";
		}

		
		
	// 	move_uploaded_file($_FILES['my_pic']['tmp_name'];, "upload_pic")

	// $sql="INSERT INTO `registration`(`cli_id`, `f_name`, `l_name`, `mobile_no`, `email_id`, `password`, `pic`) VALUES ('NULL','$f_name','$l_name','$mob_no','$email_id','$pass','')";
	// mysqli_query();
}




?>
<div class="container">
<div class="row">
    <div class="col-6 col-sm-3">
    	<div class="overflowTest">
    	<hr>
    		What is online examination
Online examination is conducting a test online to measure the knowledge of the participants on a given topic. In the olden days everybody had to gather in a classroom at the same time to take an exam. With online examination students can do the exam online, in their own time and with their own device, regardless where they life. You online need a browser and internet connection. 
<hr>

How online examination system works
The teacher or course builder creates an account with an exam builder. In such an exam system you can create questions and add them to the exam. You can choose between multiple choice questions or free text questions. The students are provided with a link to the online exam, they sign up and can take the exam. They see the results immediately afterwards. Read more about the objectives of an online examination system.
<hr>

Benefits and limitations of an online examination system
The big benefit of online examination is the reduction of costs and time, both from the student as from the teacher. The biggest limitation is that you have to be online to use an online examination system. Hence the name "online".
<hr>
Who uses an online examination system?
Everybody who needs an exam to be taken by a group of students. Our customers range from schools and teachers to companies. 
<hr>
What are typical features of an online examination system?
Obviously it must be possible to make an exam. And create questions. Preferably the exam provides for the option to create a question bank. And you have to be able to set the rules when a student passes or fails the exam. Those features are just the basics. Look at our online exam features to get a broader picture.
</div>





    </div>
    <div class="col-6 col-sm-6">
    	
    	<br>
    	
    	<!-- Default form register -->
<form class="text-center border border-light p-5" method="post" enctype="multipart/form-data">
		
		<div class="alert alert-success" role="alert" align="center" style="font-weight: bolder;">
 				<?php   echo $msg; ?>
		</div>
    <p class="h4 mb-4" style="font-family:Copperplate Gothic; font-size: 42px; color:#7d4627  ">Sign up</p>

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
    <br>

    <!-- E-mail -->
    <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail or user_name " name="email_id">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pass">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

   
    <br>

     <input type="file" id="defaultRegisterPhonePassword" class="form-control"  aria-describedby="defaultRegisterFormPhoneHelpBlock" name="my_pic">
   <!--  <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small> -->

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="regis">Sign in</button>

    <!-- Social register -->
   <!--  <p>or sign up with:</p> -->

<!--     <a type="button" class="light-blue-text mx-2">
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
    </a> -->

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a> and
        <a href="" target="_blank">terms of service</a>. </p>

</form>
<!-- Default form register -->
    </div>
    <div class="col-6 col-sm-3">
    	<div class="overflowTest">
    	<hr>
    		What is online examination
Online examination is conducting a test online to measure the knowledge of the participants on a given topic. In the olden days everybody had to gather in a classroom at the same time to take an exam. With online examination students can do the exam online, in their own time and with their own device, regardless where they life. You online need a browser and internet connection. 
<hr>

How online examination system works
The teacher or course builder creates an account with an exam builder. In such an exam system you can create questions and add them to the exam. You can choose between multiple choice questions or free text questions. The students are provided with a link to the online exam, they sign up and can take the exam. They see the results immediately afterwards. Read more about the objectives of an online examination system.
<hr>

Benefits and limitations of an online examination system
The big benefit of online examination is the reduction of costs and time, both from the student as from the teacher. The biggest limitation is that you have to be online to use an online examination system. Hence the name "online".
<hr>
Who uses an online examination system?
Everybody who needs an exam to be taken by a group of students. Our customers range from schools and teachers to companies. 
<hr>
What are typical features of an online examination system?
Obviously it must be possible to make an exam. And create questions. Preferably the exam provides for the option to create a question bank. And you have to be able to set the rules when a student passes or fails the exam. Those features are just the basics. Look at our online exam features to get a broader picture.
</div>

    </div>
  </div>

</div>  