<html>
  <body>
   <center>
    <form>
	  <table>
	    <tr>
		  <td>Enter Unit</td>
		  <td><input type="text" name="1"></td>
		</tr>
		<tr>
		  <td><input type="submit" name="submit" value="unit"></td>
		</tr>
	  </table>
	</form>
	   <?php
	      if(isset($_REQUEST['submit']))
		  {
		  
		    $unit=$_REQUEST['1'];

			$charge="";
			$tax="";
			$tot="";
			
			    if($unit>=0 && $unit<=100)
			    {
			      $charge=100;
                  $tax=0;
				  $tot=$charge+$tax;
			    }
			    else if($unit>=101 && $unit<=200)
			    {
			      $charge=100+($unit-100)*2;
			      $tax=$charge*2/100;
				  $tot=$charge+$tax;
		   	    }
			    else if($unit>=201 && $unit<=400)
                {
			      $charge=100+200+($unit-200)*3;
			      $tax=$charge*4/100;
				  $tot=$charge+$tax;
			    }
			    else if($unit>=401 && $unit<=800)
			    {
			      $charge=100+200+600+($unit-400)*4;
			      $tax=$charge*6/100;
				  $tot=$charge+$tax;
				}
				else
				{
				  $charge="invalid";
				} 
				    echo"<br>your entered unit=$unit";
					echo"<br>total charge=$charge";
					echo"<br>total tax=$tax";
					echo"<br>total balance=$tot";
			
		  }
	   ?>
   </center>
  </body>
</html>