<style type="text/css">
	.ans-css{
		font-size: 16px;
		 font-family: sans-serif;
		  height: 30px
	}
</style>
<?php
error_reporting(0);
session_start();
$user_key=$_SESSION['user_key'];
if($user_key=="")
{
	header("location:./?con=login");
}

else
{
	?>
	<?php
$cat_name= $_GET['quiz'];
//echo "$cat_name";
 require("./config/db.php");
 require 'head.php';

    
      extract($_POST);
     $data=mysqli_query($way,"SELECT * FROM `add_questions` WHERE `cate_name`='$cat_name'");



     while ($arr=mysqli_fetch_array($data,MYSQLI_ASSOC)) {
     	// echo "<pre>";
     	// print_r($arr);
     	$Ques=$arr['Ques'];
     	$ans1=$arr['ans1'];
     	$ans2=$arr['ans2'];
     	$ans3=$arr['ans3'];
     	$ans4=$arr['ans4'];

          // echo "<pre>";
          // print_r($arr);
	?>
	
	
	<?php
          
          # code...
      }


      ?>
      <div class="container_fluid">
		<div class="row">
			<div class="col-sm-12" style="text-align: center;font-size: 30px; color: #800000; font-weight: bold">
				Welcome to our Quiz
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<table width="100%" align="center">
					<tr align="center" >
						<td colspan="2" style="font-size: 22px; font-weight: bold; font-family: sans-serif; height: 80px">
							<?php echo "$Ques"; ?>
						</td>
					</tr>
					<tr>
						<td class="ans-css">
							<input type="radio" name="ans" value="1">
							<?php echo "$ans1"; ?>
						</td>
						<td class="ans-css">
							<input type="radio" name="ans" value="2">
							<?php echo "$ans2"; ?>
						</td>
					</tr>
					<tr>
						<td class="ans-css">
							<input type="radio" name="ans" value="3">
							<?php echo "$ans3"; ?>
						</td>
						<td class="ans-css">
							<input type="radio" name="ans" value="4">
							<?php echo "$ans4"; ?>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center" height="50px">
							<input type="submit" value="Next" name="">
						</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
      <?php
  }
       
        ?>
