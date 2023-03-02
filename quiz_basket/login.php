
<?php

require('./config/db.php');
// include('./config/db.php');
extract($_POST);
if(isset($login))
{
    $sql="SELECT `email_id`,`mobile_no`,`password`,`user_type`  FROM `registration` WHERE email_id='$user_name' or mobile_no='$user_name'";
	$data=mysqli_query($way,$sql);
    while ($arr=mysqli_fetch_array($data,MYSQLI_ASSOC))
     {
        // echo "<pre>";
        // print_r($arr);
        $email_id=$arr['email_id'];
        $password=$arr['password'];
        $mobile_no=$arr['mobile_no'];
        $user_type=$arr['user_type'];
        if(($user_name==$email_id  or  $user_name==$mobile_no) and ($pass==$password ))
        {
           if($user_type=="user")
           {
                header("location:welcome_page.php");
           }
           else
           {
                 header("location:./admin/");

           }

        }
        else
        {
            echo "User name or password isorng.";
        }
        # code...
    }
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
    <p class="h4 mb-4" style="font-family:Copperplate Gothic; font-size: 42px; color:#7d4627  ">Login Now </p>

  
     <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Email_Id or Mobile Number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="user_name">
    <br>



    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pass">
    <br>
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       <a href="" style="text-decoration: none;">Forget Password </a>
    </small>

   
    <br>

   <!--  <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small> -->

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="login">Sign in</button>

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