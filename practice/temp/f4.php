<html>
<body bgcolor="#00FF99" text="#FF0000">
<center>
<form>
<table>
<tr>
<td>Enter First no</td>
<td><input type="text" name="f"></td>
</tr>
<tr>
<td>Enter Second no</td>
<td><input type="text" name="s"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Operation"></td>
</tr>
</table>
</form>
<?php
if(isset($_REQUEST['submit']))
{
$a=$_REQUEST['f'];
$b=$_REQUEST['s'];
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
echo "<center><table border=1 cellspacing=10 cellpadding=10>";
echo "<tr><td>$a</td><td>+</td><td>$b</td><td>=</td><td>$c</td></tr>";
echo "<tr><td>$a</td><td>-</td><td>$b</td><td>=</td><td>$d</td></tr>";
echo "<tr><td>$a</td><td>*</td><td>$b</td><td>=</td><td>$e</td></tr>";
echo "<tr><td>$a</td><td>/</td><td>$b</td><td>=</td><td>$f</td></tr>";
echo "</table></center>";
}
?>
</center>
</body>
</html>