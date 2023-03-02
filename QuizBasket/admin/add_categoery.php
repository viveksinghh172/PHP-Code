<?php
include('header.php');

 require(".././config/db.php");

 extract($_POST);
 if (isset($add_cat)) 
 {
 	// echo "<pre>";
 	// print_r($_POST);
 	$name_of_file=$_FILES['att']['name'];
 	$ext=end(explode(".", $name_of_file));
 	if($ext=="png" or $ext=="jpg")
 	{
 		if(move_uploaded_file($_FILES['att']['tmp_name'], "../assets/upload_categ/$name_of_file"))
 		{

 			if(mysqli_query($way,"INSERT INTO `categoery`(`cat_id`, `cat_name`, `cat_details`, `cat_pic`) VALUES ('NULL','$cat_name','$cat_details','$name_of_file')"))
 			{
 				$msg="Add Categoery SuccesssFully";
 			}
 			else
 			{
 				$msg="Record not Inserted . Pls try agin ";
 			}
 		}
 		else
 		{
 			$msg="Categoery Pic Not upload . Pls Try agin";
 		}
 	}
 	else 
 	{
 		$msg="Extenstion does not Suppoert";
 	}
 	# code...
 }
 ?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<div class="forms-main_agileits">
														
			<div class="graph-form agile_info_shadow">
						<h3 class="w3_inner_tittle two">Basic Form </h3>
						<div class="form-body">
							<br>
							<br>
							  <?php
     								echo "<div style='text-align:center'; color:green;>$msg</div>";
							  ?>
							<form method="post" enctype="multipart/form-data"> 
								<div class="form-group"> 
									<label for="exampleInputEmail1">Categoery Name</label>
									 <input type="text" class="form-control" name="cat_name"> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Categoery Details (Maxminum 200 words )</label>
									 <textarea class="form-control" style="height: 120px; width: 100%" name="cat_details"> </textarea  >
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Categoery Details</label>
									<input type="file" name="att">
								</div>
									
									
								<input type="submit" class="btn btn-default" value="Add Categoery " name="add_cat">
					       </form> 
																	</div>

															</div>
					<div class="col-md-3">										
					</div>

	</div>

													

 <?php include('footer.php'); ?>