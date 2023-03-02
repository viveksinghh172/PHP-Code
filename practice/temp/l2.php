<html>
<body>
<form>
Enter no to print table<input type="text" name="n">
<input type="submit" name="submit" value="Table">
<?php
if(isset($_REQUEST['submit']))
{
$n=$_REQUEST['n'];
for($i=1;$i<=10;$i++)
{
$t=$n*$i;
echo "<br>$n  *   $i   =   $t";
}
}
?>
</body>
</html>