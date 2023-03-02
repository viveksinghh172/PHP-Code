

<?php


		session_start();
   			$user_key=$_SESSION['user_key'];
   			if($user_key=="")
   			{
   				header("location:index.php");
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
	<table border="1" width="100%">
		<tr>
			<td><a href="home_page.php">home_page</a></td>
			<td><a href="about.php">about us</a></td>
			<td><a href="contact.php">contact us</a></td>
			<td><a href="logout.php">logout</a></td>
		</tr>
		
	</table>
about

</body>
</html>
<?php
}
?>