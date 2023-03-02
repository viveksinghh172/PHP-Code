<?php

session_start();
$user_key=$_SESSION['user_key'];
if ($user_key=="")
{

	header("location:index..php");
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

	<h2>our services</h2>

</body>
</html>

<?php

}

?>