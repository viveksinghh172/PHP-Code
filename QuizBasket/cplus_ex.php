<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	//mysqli_connect("server_name","user_name","password","databasename");
	$con=mysqli_connect("localhost","root","","atm");
	$id=1;
	$pin_code=1233;
	$pass=23435;
	mysqli_query($con,"INSERT INTO `user_account` (`acc_id`, `pin_code`, `pass`) VALUES ('NULL', '$pin_code', '$pass');")
	?>

</body>
</html>