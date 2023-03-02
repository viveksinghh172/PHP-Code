<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php


				// 
					$stu_info=array("Rajeev","Vivek","Himanshu","Sanddep","Nutun","Nimi");
					echo "<pre>";
					print_r($stu_info);
					echo "<br>";
					echo "$stu_info[3]";
					$cou=0;
					$len=count($stu_info);
					echo "<br>Length of my array is $len";
					echo "<ul>";
					while ($cou<$len) {
							echo "<li>$stu_info[$cou]</li>";
							$cou++;
						# code...
					}
					echo "</ul>";
					echo "<br>";
					$sal[0]=123;
					$sal[1]=456;
					$sal[2]="NULL";
					$sal[2]="Raja";
					// echo "<pre>";

					for($cou=0;$cou<count($sal);$cou++)
					{
							echo "<br>$sal[$cou]";
					}

					// Associative Arrays
						$stu_info=array("Rajeev","Vivek","Himanshu","Sanddep","Nutun","Nimi");
					$emp_sal=array("Rajeev"=>28000,"Vivek"=>15000,"Himanshu"=>15500,"Sandeep"=>16000,"Nutun"=>16500,"Nimi"=>17000);
					echo "<pre>";
					print_r($emp_sal);

					echo "<br>";
					echo "Sal of sandeep is ". $emp_sal['Sandeep'];

					foreach ($emp_sal as $name_of_emp => $salary) {
						echo "<br>My emp name is $name_of_emp and salary is $salary";
						# code...
					}
					echo "<br> list of my employee ";
					$emp_sal=array("Rajeev"=>28000,"Vivek"=>15000,"Himanshu"=>15500,"Sandeep"=>16000,"Nutun"=>16500,"Nimi"=>17000);
					foreach ($emp_sal as $key => $value) {
						echo "<br>List of my emp is ".$key;
						# code...
					}
					echo "<br>";
					foreach ($emp_sal as  $value) {
						echo "<br>List of my emp is ".$value;
						# code...
					}

$emp_sal=array("Rajeev"=>28000,"Vivek"=>15000,"Himanshu"=>25500,"Sandeep"=>36000,"Nutun"=>36500,"Nimi"=>47000,"Muskan"=>10000,"Soni"=>20000,"Suraj"=>27500,"Sumit"=>33000);
					// Wap in php=> and given condition is

				0-10000
				10000-20000
				20000-30000
				30000-40000

				name of emp is      is salary betwwn 0 -10000 







	?>

</body>
</html>