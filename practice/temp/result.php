<!DOCTYPE HTML>
<html>
<head>
</head>  
<body>

<form>
<table border=1 cellspacing=10 cellpadding=10>
	<tr><td>Enter Name</td>
		<td><input type="text" name="n"></td></tr>
		<tr><td>Enter Roll no.</td>
		<td><input type="text" name="r"></td></tr>
		<tr><td>Enter Physics no.</td>
		<td><input type="text" name="p"></td></tr>
		<tr><td>Enter Chemistry no.</td>
		<td><input type="text" name="c"></td></tr>
		<tr><td>Enter Maths no.</td>
		<td><input type="text" name="m"></td></tr>
		<td><input type="submit" name="submit" value="Result"></td>
	</tr>
</table>
</form>

<?php
if(isset($_REQUEST['submit']))
{
$x=$_REQUEST['n'];
$y=$_REQUEST['r'];
$a=$_REQUEST['p'];
$b=$_REQUEST['c'];
$c=$_REQUEST['m'];
$t=$a+$b+$c;
$per=$t/3;

if($per>75 && $per<100)
{
$res="Excellent";
}
else if($per>60 && $per<74)
{
$res="First";
}
else if($per>45 && $per<59)
{
$res="Second";
}
else if($per>33 && $per<44)
{
$res="Third";
}
else if($per>0 && $per<32)
{
$res="Fail";
}



echo "<table border=1 cellspacing=10 cellpadding=10>";
echo "<tr><td>Name</td><td>=</td><td>$x</td></tr>";
echo "<tr><td>Roll no.</td><td>=</td><td>$y</td></tr>";
echo "<tr><td>Physics</td><td>=</td><td>$a</td></tr>";
echo "<tr><td>Chemistry</td><td>=</td><td>$b</td></tr>";
echo "<tr><td>Maths</td><td>=</td><td>$c</td></tr>";
echo "<tr><td>Total</td><td>=</td><td>$t</td></tr>";
echo "<tr><td>Percentage</td><td>=</td><td>$per</td></tr>";
echo "<tr><td>Result</td><td>=</td><td>$res</td></tr></table>";
}
?>
</body>
</html>