<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$con=mysqli_connect("localhost","root","","dynamic_menu");
		extract($_POST);
		if (isset($h)) {

			if(mysqli_query($con,"INSERT INTO `home_menu`(`h_id`, `h_name`) VALUES ('NULL','$h_name')"))
			{
				echo "Menu Inserted";
			}
			else
			{
				echo "Try agin";
			}
		}


	?>

	<form method="post">
		<input type="text" name="h_name" placeholder="Enter home Menu">
		<br>
		<input type="submit" name="h">
	</form>



	<br>
	<br>
	<br>
	<br>
	<?php
	$da=mysqli_query($con,"SELECT * FROM `home_menu`");
	if (isset($sub_btn)) {

		if(mysqli_query($con,"INSERT INTO `sub_menu`(`sub_menu_id`, `ref_id`, `sub_menu_name`) VALUES ('NULL','$cat_name','$sub_menu')"))
		{
			echo "Success add sub menu";
		}
		else
		{
			echo "Not Inserted";
		}
		# code...
	}
	
	?>
	<form method="post">
		<select name="cat_name">
			<option>Pls select Categoery</option>
			<?php
					while ($arr=mysqli_fetch_array($da,MYSQLI_ASSOC)) {
		# code...
		// echo "<pre>";
		// print_r($arr);
		$h_id=$arr['h_id'];
		$h_name=$arr['h_name'];
		echo "<option value='$h_id'>$h_name</option>";
	}
			?>
			
		</select>
		<br>
		<input type="text" name="sub_menu">
		<br>
		<input type="submit" name="sub_btn">
	</form>

</body>
</html>