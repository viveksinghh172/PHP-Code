<?php

session_start();
$user_key=$SESSION['$user_key'];
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

	<h2>help us page</h2>

</body>
</html>

<?php

}

?>