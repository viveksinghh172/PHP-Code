
<?php
error_reporting(0);
session_start();
$user_key=$_SESSION['admin_key'];
echo "$user_key";
if($user_key=="")
{
	header("location:./?con=login");


}

else
{

	?>
	<?php
//echo "$cat_name";
  require(".././config/db.php");
include('header.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php
 			extract($_POST);
 			if (isset($add_slider1)) 
 			{
 				$name_of_file=$_FILES['silder1']['name'];
 				$r=rand();
 				$ext=end(explode(".", $name_of_file));
 				if($ext=="png" or $ext=="PNG" or $ext=="jpg" or $ext=="jpeg")
        		{
            		if(move_uploaded_file($_FILES['silder1']['tmp_name'], "../assets/silder_img/$r.png"))
           			 {
           			 	
           			 	if(mysqli_query($way,"INSERT INTO `add_silder`(`slider_id`, `silder_img`) VALUES ('NULL','$r')"))
           			 	{
           			 		$msg="Silder AddSuccess Full";
           			 	}
           			 }
           			 else
           			 {
           			 	$msg="Not Silder AddSuccess Full";
           			 }
 				# code...
 				}
 			}

 			// if (isset($add_slider2)) 
 			// {
 			// 	$name_of_file=$_FILES['silder2']['name'];
 			// 	$ext=end(explode(".", $name_of_file));
 			// 	if($ext=="png" or $ext=="PNG" or $ext=="jpg" or $ext=="jpeg")
    //     		{
    //         		if(move_uploaded_file($_FILES['silder2']['tmp_name'], "../assets/silder_img/$silder2.png"))
    //        			 {
    //        			 	$msg="Silder AddSuccess Full";
    //        			 }
    //        			 else
    //        			 {
    //        			 	$msg="Not Silder AddSuccess Full";
    //        			 }
 			// 	# code...
 			// 	}
 			// }

 			// if (isset($add_slider3)) 
 			// {
 			// 	$name_of_file=$_FILES['silder3']['name'];
 			// 	$ext=end(explode(".", $name_of_file));
 			// 	if($ext=="png" or $ext=="PNG" or $ext=="jpg" or $ext=="jpeg")
    //     		{
    //         		if(move_uploaded_file($_FILES['silder3']['tmp_name'], "../assets/silder_img/$silder3.png"))
    //        			 {
    //        			 	$msg="Silder AddSuccess Full";
    //        			 }
    //        			 else
    //        			 {
    //        			 	$msg="Not Silder AddSuccess Full";
    //        			 }
 			// 	# code...
 			// 	}
 			// }
 	?>
 	<br>
 	<br>
 	<br>
 	<br>

<form method="post" enctype="multipart/form-data">
 	<table border="1" align="" width="100%">
 		<tr>
 			<td><div align="center">Add Silder in top for First </div></td>
 		</tr>
 		<tr>
 			<td><input type="file" name="silder1"></td>
 		</tr>
 		<tr>
 			<td align="center"><input type="submit" name="add_slider1"></td>
 		</tr>
 		
 	</table>
 	</form>
 	<br>
 	<br>
 	<!-- <form method="post" enctype="multipart/form-data">
 	<table border="1" align="" width="100%">
 		<tr>
 			<td><div align="center">Add Silder in top for 2 </div></td>
 		</tr>
 		<tr>
 			<td><input type="file" name="silder2"></td>
 		</tr>
 		<tr>
 			<td align="center"><input type="submit" name="add_slider2"></td>
 		</tr>
 		
 	</table>
 	</form>

 	<br>
 	<br>

 	<form method="post" enctype="multipart/form-data">
 	<table border="1" align="" width="100%">
 		<tr>
 			<td><div align="center">Add Silder in top for 3 </div></td>
 		</tr>
 		<tr>
 			<td><input type="file" name="silder3"></td>
 		</tr>
 		<tr>
 			<td align="center"><input type="submit" name="add_slider3"></td>
 		</tr>
 		
 	</table>
 	</form> -->
 
 </body>
 </html>
 <?php
  include('footer.php');
}
?>