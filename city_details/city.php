<!DOCTYPE html>
<html>
<head>
	<title></title>





    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>




</head>
<body>



<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Navbar</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Dehradun</a>
                   
                    <a class="dropdown-item" href="#">Delhi</a>
                    <a class="dropdown-item" href="#">Patna</a>
                    
                </div>
            </li>

        </ul>
        <!-- Links -->

        <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->




<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">



             <!--Carousel Wrapper-->
			<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
			  <!--Indicators-->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-2" data-slide-to="1"></li>
			    <li data-target="#carousel-example-2" data-slide-to="2"></li>
			  </ol>
			  <!--/.Indicators-->
			  <!--Slides-->
			  <div class="carousel-inner" role="listbox">
			    <div class="carousel-item active">
			      <div class="view">
			        <img src="Gallery\dehradun.jpg" height="600px" width="100%" alt="First slide">
			        <div class="mask rgba-black-light"></div>
			      </div>
			      <div class="carousel-caption">
			        <h3 class="h3-responsive">Light mask</h3>
			        <p>First text</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <!--Mask color-->
			      <div class="view">
			        <img src="Gallery\delhi.jpg" height="600px" width="100%" alt="Second slide">
			        <div class="mask rgba-black-strong"></div>
			      </div>
			      <div class="carousel-caption">
			        <h3 class="h3-responsive">Strong mask</h3>
			        <p>Secondary text</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <!--Mask color-->
			      <div class="view">
			        <img src="Gallery\patna.jpg" height="600px" width="100%" alt="Third slide">
			        <div class="mask rgba-black-slight"></div>
			      </div>
			      <div class="carousel-caption">
			        <h3 class="h3-responsive">Slight mask</h3>
			        <p>Third text</p>
			      </div>
			    </div>
			  </div>
			  <!--/.Slides-->
			  <!--Controls-->
			  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			  <!--/.Controls-->
			</div>
			<!--/.Carousel Wrapper-->

        	
        </div>
    	
    </div>
	
</div>



</body>
</html>