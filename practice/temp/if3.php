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
<td><input type="submit" name="submit" value="Show"></td>
</tr>
</table>
</form>
<?php
if(isset($_REQUEST['submit']))
{
$a=$_REQUEST['f'];
$b=$_REQUEST['s'];

if($a>$b)
echo "<br>First no is big";
else
echo "<br>Second no is big";

}
?>
</center>
</body>
</html>