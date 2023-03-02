<?php
			    require("./config/db.php");
			    extract($_POST);
			  
			    if (isset($login)) {
			    	# code...
			    	// echo "<pre>";
			    	// print_r($_POST);
			    	$sql="SELECT  `mobile_no`, `email_id`, `password`, `user_type`, `status`, `c_date` FROM `registration` WHERE email_id='$user_name' or mobile_no='$user_name'";
			    	$data=mysqli_query($way,$sql);
			    	// echo "<pre>";
			    	// print_r($data);
			    	while ($arr=mysqli_fetch_array($data,MYSQLI_ASSOC)) {
			    		// echo "<pre>";
			    		// print_r($arr);
			    		$mobile_no=$arr['mobile_no'];
			    		$email_id=$arr['email_id'];
			    		$password1=$arr['password'];
			    		$status=$arr['status'];
			    		$user_type=$arr['user_type'];
			    		$c_date=$arr['c_date'];

			    		// echo "<BR> $password1";

			    		if(($user_name==$email_id or $user_name==$mobile_no) and ($password==$password1) and $user_type=="user")		
			    		{
			    			if($status==1)
			    			{
			    				//echo "yes ";
			    				  session_start();
			    				$_SESSION['user_key']=$email_id;
			    				// header("location:./?con=");
			    				?>
			    				<script type="text/javascript">
			    					window.location.href="?con=";
			    				</script>
			    				<?php
			    			}
			    			else
			    			{
			    				  session_start();
			    				$_SESSION['user_key']=$email_id;
			    					echo "Go to user wating page";
			    			}
			    			
			    		}
			    		else if(($user_name==$email_id or $user_name==$mobile_no) and ($password==$password1) and ($user_type=="admin" or $user_type=="Admin"))
			    		{
			    				  session_start();
			    				$_SESSION['admin_key']=$email_id;
			    			//echo "go to admin panel";
			    				// header("location:admin/");
			    				?>
			    				<script type="text/javascript">
			    					window.location.href="admin/";
			    				</script>
			    				<?php
			    		}
			    		else
			    		{
			    			echo "Username or mobile no or password doest not match.";
			    		}


			    		
			    	}
			    }

?>


<div class="container-fluid">
<div class="row">
		<div class="col-md-7 loginimage" >
			
		</div>

		<div class="col-md-5">
						            <!-- Default form register -->
			<form class="text-center  border-light p-5" method="post" enctype="multipart/form-data" >
			<br><br><br>	
			    <h2 class=" mb-4 fadeInRight headpara">Online Quiz Portal</h2>
			    <p>Student Login Panel</p>
			    <hr>	
			    <!-- Phone number -->
			    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Email ID or Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" 
			    name="user_name"><br>
			    <!-- Password -->
			    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">
			    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
			   			<a href="#">Forgot Password?</a>
			    </small>

			    <!-- Sign up button -->
			    <input class="btn btn-info my-4 btn-block" type="submit" value="Login Now" name="login">
			    <hr>
			    

			</form>
			<!-- Default form register -->
		</div>
</div>
</div>