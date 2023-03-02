<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
			$con=mysqli_connect("localhost","root","","dynamic_menu");
			$data=mysqli_query($con,"SELECT * FROM `home_menu`");
			
	?>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
    	<?php
    	while ($arr=mysqli_fetch_array($data)) 
    	{
				// echo "<pre>";
				// print_r($arr);
				$h_id=$arr['h_id'];
				$h_name=$arr['h_name'];
				?>
				 <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown"><?php echo $h_name ; ?></a>
				 <?php
				 $data1=mysqli_query($con,"SELECT * FROM `sub_menu` WHERE `ref_id`='$h_id'");
				?>
				 	
				        <ul class="dropdown-menu">
				        	<?php
				        	 while ($arr1=mysqli_fetch_array($data1))
				        	  {
				 				// echo "<pre>";
				 				// print_r($arr1);
				 						$sub_menu_name=$arr1['sub_menu_name'];
				 				?>
				 					<li>
				 						<a href="#"><?php echo $sub_menu_name ; ?></a></li>
				 			<?php
				 				}
				 				?>
				          
				          
				        </ul>
				  </li>
				 	<?php
				 	# code...
				 }
				 ?>
				
				
     
      <!-- <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li> -->
     
    </ul>
  </div>
</nav>


</body>
</html>