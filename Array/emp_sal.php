<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php


	$emp_sal=array("Rajeev"=>28000,"Vivek"=>15000,"Himanshu"=>25500,"Sandeep"=>36000,"Nutun"=>36500,"Nimi"=>47000,"Muskan"=>10000,"Soni"=>20000,"Suraj"=>27500,"Sumit"=>33000);

	echo "<pre>";
	print_r($emp_sal);

	$length=count($emp_sal);
	echo "<br>$length";

	foreach ($emp_sal as $name => $sal) 
	{
		# code...
	


		if ($sal>=0 && $sal<=10000) 
		{

			//echo "<pre>";
			echo "<br> name of employee is" .$name. " whose salary is between 0-10000"; 
		}

		elseif ($sal>10000 && $sal<=20000) 
		{
			echo "<pre>";
			print_r($emp_sal);
			# code...
		}


	}



	?>

</body>
</html>