<?php
error_reporting(0);
session_start();
include("admin_panel/config/database.php");
?>
<!-- header -->
<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">Mobile Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="search.php" method="post">
						<input type="text" name="Search" placeholder="Search..." required>
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				
					
					<button class="w3view-cart" type="submit" name="submit" value="" onclick="location.href='cart.php'"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				  
			</div>  
		</div>
	</div>
    <!-- //header -->
    <!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="act">Home</a></li>	
						
						
						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
				<ul class="dropdown-menu">
						<?php
					$sel=mysqli_query($con,"select id,category from category");
					while($arr=mysqli_fetch_assoc($sel))
					{
						?>
             <li><a href="category-products.php?cat=<?= $arr['category'];?>"><?= $arr['category'];?></a></li>
						<?php

					}
					?>
             </ul>
						</li> 
						<li><a href="about.html">About Us</a></li>  
						<li><a href="contact-us.php">Contact Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->