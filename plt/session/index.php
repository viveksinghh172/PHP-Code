<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <?php

   extract($_POST);
   if (isset($log)) {
   	# code...
   		if($u_name=="r" and $pass=="p")
   		{
   			header("location:home_page.php");
   			session_start();
   			$_SESSION['user_key']=$u_name;
   		}
   		else
   		{
   			echo "Not Matched.";
   		}

   }
   		
   ?>
<form method="post">
   <table border="1" align="center" width="70%">
   	<tr>
   		<td>
   			<div align="center">Login</div>
   		</td>
   	</tr>
   	<tr>
   		<td><input type="text" name="u_name"></td>
   	</tr>
   	<tr>
   		<td><input type="text" name="pass"></td>
   	</tr>
   	<tr>
   		<td><input type="submit" name="log"></td>
   	</tr>
   	
   </table>
   </form>

</body>
</html>