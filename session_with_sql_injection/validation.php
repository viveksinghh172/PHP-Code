<!DOCTYPE html>
<html>
<head>
	<title>form Validation in PHP</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>


	<?php
	error_reporting(0);

	$way=mysqli_connect('localhost' , 'root', '', 'validation')  or die("database error");
	if ($way) 
	{
		echo "connected";
		# code...
	}

	extract($_POST);
	if (isset($submit)) 
	{

		if (empty($name)) 
		{
			$missing_name= "Please enter your name";
			# code...
		}
		elseif (empty($u_name))
	    {
	    	$missing_u_name="Please enter your user name";
			# code...
		}
		elseif (empty($pass)) 
		{
			$missing_pass="please enter your password";
			# code...
		}

		else
		{
			$name=test_input($name);
			$u_name=test_input($u_name);
			$pass=test_input($pass);
			$pass=md5($pass);

			$data=mysqli_query($way,"INSERT INTO `sql_injection`(`name`, `u_name`, `password`) VALUES ('$name','$u_name', '$pass')");
		}
    
	}

	function test_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	$data1=mysqli_query($way, "SELECT * FROM `sql_injection`");
	while ($arr=mysqli_fetch_array($data1)) 
	{
		echo "<pre>";
		print_r($arr);
		# code...
	}


	?>




	<form method="post">

		<table border="1" align="center" width="65%">

			<tr>
				<td colspan="3" align="center"><h2><b>Form Validation</b></h2></td>
			</tr>
			<tr>
				<td><label>Name:</label></td>
				<td>
					<input type="text" name="name">
				</td>
				<td>
					<span class="error"><?php echo "$missing_name";?></span>
				</td>
			</tr>
			<tr>
				<td><label>User Name:</label></td>
				<td>
					<input type="text" name="u_name">
				</td>
				<td>
					<span class="error"><?php echo "$missing_u_name"; ?></span>
				</td>
			</tr>
			<tr>
				<td><label>Password:</label></td>
				<td>
					<input type="Password" name="pass">
				</td>
				<td>
					<span class="error"><?php echo "$missing_pass"; ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submit"></td>
			</tr>

		</table>
		
	</form>


</body>
</html>