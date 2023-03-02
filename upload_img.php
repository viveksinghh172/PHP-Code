<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="cyan">


<?php

  if(isset($_POST['submit']))


    $name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
	$type=$_FILES['img']['type'];
	$size=$_FILES['img']['size'];


	echo "name of i $name <brtype of file  $type <br>temp_name of file is $tmp_name <br> size of file is$size";

?>




  <form method="post" enctype="multipart/form-data">
  	<table border="1" width="60%" align="center">

  	  <tr>
  	  	<td align="center">Upload Image</td>
  	  </tr>
  	  <tr>
  	  	<td align="center"><input type="file" name="img"></td>
  	  </tr>
  	  <tr>
  	  	<td align="center"><input type="submit" name="submit"></td>
  	  </tr>
  		
  	</table>
  </form>


</body>
</html>