<?php

extract($_POST);
if (isset($sub)) 
{
	$con=mysqli_connect("localhost","root","","prac_curd")or die("Database error");
	if (mysqli_query($con,"insert into details('name','email','age','mobile')values('$name','$email','$age','$mobile')")) 
	{
		echo "Data inserted";
	}
	else
	{
		echo "Already Exists";
	}
}

?>

<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="container">

        <div class="header"><h2>Insert Data</h2></div>
		<form method="post" enctype="multipart/form-data">

			<div class="input-group">
				<label>Name:</label>
				<input type="text" name="name">
			</div>

			<div class="input-group">
				<label>Email:</label>
				<input type="text" name="email">
			</div>

			<div class="input-group">
				<label>Age:</label>
				<input type="text" name="age">
			</div>

			<div class="input-group">
				<label>Mobile No.:</label>
				<input type="text" name="mobile">
			</div>

			<div class="input-group">
				<button type="submit" name="sub" class="btn">Submit</button>
			</div>

		</form>
		
	</div>

</body>
</html>