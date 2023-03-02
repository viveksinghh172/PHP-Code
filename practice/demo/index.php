<?php

$con=mysqli_connect("localhost","root","","prac_curd")or die("Database error");
$sel=mysqli_query($con,"select * from details order by created_at desc");

//For delete a record
@$del=$_GET['del'];
if(!empty($del))
{
	if(mysqli_query($con,"delete from details where id=$del"))
	{
		echo "<script>alert('record deleted');
        location.href='index.php';
		</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>curd simple</title>

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">

		<table class="table">

			<tr>
				<td class="text-center" colspan="6">
					<a href="insert.php"><h3><strong>Add New</strong></h3></a>
				</td>
			</tr>

			<tr>
				<th>S. Number</th>
				<th>Name</th>
				<th>Email</th>
				<th>Age</th>
				<th>Mobile</th>
				<th>Action</th>
			</tr>

	<?php

	   if(mysqli_num_rows($sel)>0)
	   {
	   	$sn=1;
	   	while ($arr=mysqli_fetch_assoc($sel)) 
	   	{
	   		echo "<tr>
	   		  <td>$sn</td>
              <td>".$arr['name']."</td>
              <td>".$arr['email']."</td>
              <td>".$arr['age']."</td>
              <td>".$arr['mobile']."</td>
              <td>".$arrr['created_at']."</td>
              <td>
                <a href='edit.php?edit=".$arr["id"]."'>Edit</a>
                <a href='index.php?del=".$arr["id"]."'>Delete</a>
              </td>

	   		</tr>";

	   	$sn++;	
	   	}

	   }

	   else
	   {
	   	echo "<tr><td>No Record Found</td></tr>";
	   }
	
	?>		

		</table>
		
	</div>

</body>
</html>