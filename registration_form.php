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

   if (isset($_POST['sign_up'])) 
   {
   	 echo "pre";
   	 print_r($_POST);
   }



   ?>
    
   
    <div class="container-fluid">

        <div class="row">

           <div class="col-sm-3"></div>

            <div class="col-sm-6">

               <form method="post">

                        <div class="form-group">
                        	<label for="f_name">Enter first name:</label>
                        	<input type="text" name="" class="form-control">
                        </div>

                        <div class="form-group">
                        	<label for="m_name">Enter Middle name:</label>
                        	<input type="text" name="" class="form-control">
                        </div>

                        <div class="form-group">
                        	<label for="l_name">Enter last name:</label>
                        	<input type="text" name="" class="form-control">
                        </div>


					    <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd">
					  </div>

					  <div class="form-group">
                        	<label for="age">Enter your age:</label>
                        	<select class="form-control">
                        		<option>pls select age</option>

                        		<?php
                                   $count=18;
                                   while ($count<=75) 
                                   {
                                   	?> 
                                    

                                    <option><?php echo $count; ?></option>

                                      <?php
                                      $count++;
                                 	 
                                   }
                        		
                                   ?>   
                        		
                        	</select>
                        </div>

					  <div class="checkbox">
					    <label><input type="checkbox"> Remember me</label>
					  </div>
					  <button type="submit" class="btn btn-default" name="sign_up">Submit</button>
					
               </form>
           	
           </div>
           <div class="col-sm-3"></div>
    	
        </div>
    	
    </div>


</body>
</html>