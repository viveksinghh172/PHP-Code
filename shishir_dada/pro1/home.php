<!DOCTYPE html>
<html>
<head>
	<title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.3/css/mdb.min.css" rel="stylesheet">



		     <!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.3/js/mdb.min.js"></script>


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-danger navbar fixed-top danger-color">

	<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>

	<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="basicExampleNav">

				<!-- Links -->
				<ul class="navbar-nav mr-auto">
						<li class="nav-item">
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
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
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

<br><br><br><br>
<div class="container-fluid">

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="post" class="text-center border-light" enctype="multipart/form-data">

			<p class="mb-7">Enter your details</p>

			<div class="form-row mb-4">

				<div class="col">
					<input type="text" class="form-control" placeholder="first name" name="f_name">
				</div><br>
				<div class="col">
					<input type="text" class="form-control" placeholder="last name" name="l_name">
				</div>
			</div>

			
              <label for="about">About</label>
              <textarea></textarea>            
            
            <div class="form-group">
              <label for="Image">
              	<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choose your ID type</a>
							<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">Aadhar Card</a>
									<a class="dropdown-item" href="#">Identity card</a>
									<a class="dropdown-item" href="#">Pan card</a>
							</div>
				</li>
              </label>
              <input type="file" name="att" class="form-control">
            </div>
            <input type="submit" value="Submit" name="sub" class="btn btn-success">			


			</form>
			</div>
		</div>
	</div>
	
</div>


</body>
</html>