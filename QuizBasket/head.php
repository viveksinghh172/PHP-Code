<?php
session_start();
$user_key=$_SESSION['user_key'];

//echo "$user_key";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Alex+Brush|Bad+Script|Berkshire+Swash|Dancing+Script|Great+Vibes|Homemade+Apple|Lobster|Marck+Script|Niconne|Petit+Formal+Script|Satisfy" rel="stylesheet"> 

<link rel="stylesheet" type="text/css" href="./css/style.css">

<style type="text/css">
    .pro_pic
{
    width: 45px;
    height: 45px;
   
    border-radius: 50%;
}
</style>
<style type="text/css">
  .img_showdow:hover
  {
    box-shadow: 10px 10px 5px grey;
  }
 .my_edit_box
 {
    border-style: solid;
    border-top-width: 1px;
    border-top-color: black;
    border-left-width: 0px;
    border-left-color: black;
    border-right-width: 0px;
    border-right-color: black;
    border-bottom-width: 2px;
    border-bottom-color: green;
 }
</style>

</head>
<body>




<div class="container-fluid">
<div class="row">
<div class="col-md-3 logodiv">
	<a class="navbar-brand" href="?con=home_page">
        <img src="./images/b.png" height="72" alt="">
    </a>
</div>
<div class="col-md-9 navdiv">
	<!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light warning-color navdiv">

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item navitem">
                        <a class="nav-link navlink navlist" href="./?con=">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item navitem">
                        <a class="nav-link navlink navlist" href="?con=category">Categories</a>
                    </li>
                    <li class="nav-item navitem">
                        <a class="nav-link navlink navlist" href="?con=testseries">Test Series</a>
                    </li>
                    <li class="nav-item navitem">
                        <a class="nav-link navlink navlist" href="?con=aboutus">About Us</a>
                    </li>
                    <li class="nav-item navitem navlist">
                        <a class="nav-link navlink" href="?con=contactus">Contact Us</a>
                    </li>

                    <!-- Dropdown -->
                    <li>
                            <?php
                            if ($user_key=="")
                             {
                                # code...
                                ?>
                             <img src="images/logo.png" class="pro_pic">
                                <?php
                            }
                            else
                            {
                                ?>
                                    <img src="./upload_pic/<?php echo $user_key ?>.png" class="pro_pic">
                                <?php
                            }
                            ?>
                        
                    </li>
                    <li class="nav-item dropdown navitem navlist">
                        <a class="nav-link dropdown-toggle navlink navitem" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Help</a>
                        <div class="dropdown-menu dropdown-primary dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="?con=testimonial">Testimonials</a>
                            <a class="dropdown-item" href="#">Blogs</a>
                            <a class="dropdown-item" href="#">Online Tests</a>
                            <a class="dropdown-item" href="?con=login">Login</a>
                            <a class="dropdown-item" href="?con=regis">Sign Up</a>
                            
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>

                </ul>
                <!-- Links -->
            </div>
            <!-- Collapsible content -->

            </nav>
            <!--/.Navbar-->
</div>
</div>
</div>

<div class="container-fluid row1">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-4 column1"><i class="fa fa-question" aria-hidden="true" style="font-size: 16px;">&nbsp;&nbsp;Have any questions?</i></div>
		<div class="col-sm-3 column2"><i class="fa fa-phone" aria-hidden="true" style="font-size: 14px;">&nbsp;&nbsp;60 68 123 654</i></div>
		<div class="col-sm-4 column3" style="font-size: 16px;"><i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;info@gmail.com</i></div>
		</div>
	</div>			
	<div class="col-md-3"></div>
</div>
</div>