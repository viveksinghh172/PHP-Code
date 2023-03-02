<html>
<body>
<form>
Enter no to print Factorial<input type="text" name="n">
<input type="submit" name="submit" value="Table">
<?php
if(isset($_REQUEST['submit']))
{
$n=$_REQUEST['n'];
$f=1;
for($i=1;$i<=$n;$i++)
{
$f=$f*$i;
}
echo "<br>Factorial of $n is=  $f";
}
?>
</body>
</html>
