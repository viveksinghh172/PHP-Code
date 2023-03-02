<?php
include('header.php');
error_reporting(0);
 require(".././config/db.php");

 extract($_POST);
 if (isset($add_question)) 
 {
 	// echo "<pre>";
 	// print_r($_POST);
 	$sql="INSERT INTO `add_questions`(`q_id`, `cate_name`, `Ques`, `ans1`, `ans2`, `ans3`, `ans4`, `right_ans`) VALUES ('NULL','$c_name','$question','$ans1','$ans2','$ans3','$ans4','$r_ans')";
 	if(mysqli_query($way,$sql))
 	{
 				$msg="Questions Add Successfully ";
 	}
 	else
 	{
 		$msg="Try agin";

 	}
 }
 ?>

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="forms-main_agileits">
														
			<div class="graph-form agile_info_shadow">
				<br>

						<h3 class="w3_inner_tittle two" align="center">Add QUESTIONS </h3>
						 <?php
     								echo "<div style='text-align:center'; color:green;>$msg</div>";
							  ?>
						<div class="form-body">
							<br>
						
							
							<form method="post" > 
								<div class="form-group"> 
									<label for="exampleInputEmail1">Select Categoery</label>
											<select name="c_name">
												<option>Pls Select Categoery</option>
									 <?php
									 		$d1=mysqli_query($way,"SELECT * FROM `categoery`");
									 		while ($abc=mysqli_fetch_array($d1,MYSQLI_ASSOC)) {
									 			// echo "<pre>";
									 			// print_r($abc);
									 			$cat_id=$abc['cat_id'];
									 			$cat_name=$abc['cat_name'];
									 			echo "<option value=$cat_name>$cat_name</option>";

									 			# code...
									 		}
									 ?>
							
										
									
									 </select>
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">What is Your Question ?</label>
									<input type="text" class="form-control" style="height: 30px; width: 100%" placeholder="What is Your Question ?" name="question"> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">First Answer ?</label>
									<input type="text" class="form-control" style="height: 30px; width: 100%" name="ans1"> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Second Answer ?</label>
									<input type="text" class="form-control" style="height: 30px; width: 100%"  name="ans2"> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Third Answer ?</label>
									<input type="text" class="form-control" style="height: 30px; width: 100%"  name="ans3"> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Fourth Answer ?</label>
									<input type="text" class="form-control" style="height: 30px; width: 100%"  name="ans4"> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Right Answer ?</label>
									<input type="text" class="form-control" style="height: 30px; width: 100%" placeholder="Right Answer ?"  name="r_ans"> 
								</div>
									
									
								<input type="submit" class="btn btn-default" value="Add Question " name="add_question">
					       </form> 
																	</div>

															</div>
					<div class="col-md-2">										
					</div>

	</div>

													

 <?php include('footer.php'); ?>