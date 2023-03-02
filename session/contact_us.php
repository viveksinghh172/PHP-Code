<?php

session_start();
$user_key=$_SESSION['user_key'];
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

	<marquee><h2>now we are in contact_us page</h2></marquee>

</body>
</html>
<?php

 }

?>