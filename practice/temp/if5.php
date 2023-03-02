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
<td>Enter Thid no</td>
<td><input type="text" name="t"></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Show"></td>
</tr>


</table>
</form>
<?php
if(isset($_REQUEST['submit']))
{
$a=$_REQUEST['f'];
$b=$_REQUEST['s'];
$c=$_REQUEST['t'];

if($a>$b && $a>$c)
echo "<br>First no is big";
else if($b>$a && $b>$c)

echo "<br>Second no is big";
else if($c>$a && $c>$b)

echo "<br>Third no is big";
else
echo "<br>All no or any two no are same";
}
?>
</center>
</body>
</html>