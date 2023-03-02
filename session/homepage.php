<?php

session_start();
$user_key=$_SESSION['user_key'];
$user_pass=$_SESSION['user_pass'];

unset($user_pass);

if ($user_key=="") 
{

	header("location:index.php");
	# code...
}

else
{

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <marquee><h2 style="color: red;">Home Page</h2></marquee>

  <table border="1" align="center" width="60%">
  	<tr>
  		<td colspan="4">
  			<div style="text-align: center;">welcome to <?=$user_key;?></div>
  		</td>
  		<td>
  			<a href="logout.php">logout</a>
  		</td>
  	</tr>

  	<tr>
  		<td><a href="homepage.php">Homepage</a></td>
  		<td><a href="aboutus.php">Aboutus</a></td>
  		<td><a href="services.php">Services</a></td>
  		<td><a href="contact_us.php">Contact Us</a></td>
  		<td><a href="help.php">Help</a></td>
  		
  	</tr>

  </table>	

</body>
</html>

<?php
}

?>