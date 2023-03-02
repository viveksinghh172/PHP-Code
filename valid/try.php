<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

	extract($_POST);
	if (isset($login)) 
	{

		if (empty($u_name) or empty($mob)) 
		{
			// echo "<pre>";
			// print_r($login)
			echo "information required";
			# code...
		}

		else
		{
			echo "login successful in db";
			echo "<pre>";
			print_r($_POST);
		}
		# code...
	}

	?>





    <form method="post">
    	<input type="text" name="u_name">
    	<br>
    	<input type="text" name="mob">
        <br>
    	<br>
    	<input type="submit" name="login">
    </form>


</body>
</html>