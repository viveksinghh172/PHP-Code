<html>
    <body>
	 <center>
	  <form>
	   <table border="1" cellspacing="10" cellpadding="10">
	    <tr>
		 <td>Enter Name</td>
		 <td><input type="text" name="1"></td>
		</tr>
		<tr>
		  <td>enter roll no.</td>
		  <td><input type="text" name="2"</td>
		</tr>
		<tr>
		  <td>Enter physics marks</td>
		  <td><input type="text" name="3"</td>
		</tr>
		<tr>
		  <td>Enter chemistry marks</td>
		  <td><input type="text" name="4"</td>
		</tr>
		<tr>
		  <td>Enter maths marks</td>
		  <td><input type="text" name="5"</td>
		</tr>
		<tr>
		   <td><input type="submit" name="submit" value="result"></td>
		</tr>
	   </table>
	  </form>
	       <?php
		     if(isset($_REQUEST['submit']))
			 {
			   $n=$_REQUEST['1'];
			   $r=$_REQUEST['2'];
			   $p=$_REQUEST['3'];
			   $c=$_REQUEST['4'];
			   $m=$_REQUEST['5'];
			    $total=$p+$c+$m;
				$per=$total/3;
				$res="";
				
				 if($per>=75 && $per<=100)
				 {
				   $res="excellent";
				 }
				  else if($res>=60 && $res<=74)
				  { 
				  $res="first division";
			      }
				  else if($res>=45 && $res<=59)
				  {
				    $res="second division";
				  }
				  else if($res>=33 && $res<=44)
				  {
				   $res="third division";
				  }
				  else if($res>=0 && $res<=32)
				   {
				    $res="fail";
				   }
				   echo"<table border=1 cellspacing=10 cellpadding=10>";
				   echo"<tr><td>Name</td>=<td>$n</td></tr>";
					echo"<tr><td>Roll No.</td>=<td>$r</td></tr>";
					echo"<tr><td>Physics marks</td>=<td>$p</td></tr>";
					echo"<tr><td>Chemistry marks</td>=<td>$c</td></tr>";
					echo"<tr><td>Maths marks</td>=<td>$m</td></tr>";
					echo"<tr><td>total</td>=<td>$total</td></tr>";
					echo"<tr><td>Percentage</td>=<td>$per%</td></tr>";
					echo"<tr><td>Result</td>=<td>$res</td></tr></table>";
				
			}	 
		   ?>
	 </center>
	</body>
</html>