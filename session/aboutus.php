<?php

session_start();
$user_key=$_SESSION['user-key'];
$user_pass=$_SESSION['user-pass'];
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

	My aboutus page

</body>
</html>

<?php
}

?>