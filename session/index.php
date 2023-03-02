<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<?php


       extract($_POST);
       if (isset($login)) 
       {

       	$user_name="vivek";
       	$pass="123";

       	if ($user_name==$u_name and $pass==$password) 
       	{

       		// echo "<pre>";
       		// echo "login successfull";

       		session_start();
       		$_SESSION['user_key']=$u_name;
       		$_SESSION['user_pass']=$password;

       		header("location:homepage.php");
       		# code...
       	}

       
       	# code...
       }


	?>

<form method="post">

<table border="1" align="center" width="70%">

	<tr>
		<td colspan="2" align="center">Welcome to my page</td>
	</tr>

	<tr>
		<td><label>enter user name</label></td>
		<td><input type="text" name="u_name"></td>
	</tr>

	<tr>
		<td><label>enter password</label></td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="login"></td>
	</tr>
	
</table>

</form>



</body>
</html>