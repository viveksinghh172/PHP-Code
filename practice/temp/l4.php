<html>
<body>
<form>
Enter Steps to print Fibo<input type="text" name="n">
<input type="submit" name="submit" value="Fibo">
<?php
if(isset($_REQUEST['submit']))
{
$n=$_REQUEST['n'];

$a=0;
$b=1;
$c=0;

echo "<br>$a  $b";
for($i=1;$i<=$n-2;$i++)
{
$c=$a +$b;
echo "  $c";
$a=$b;
$b=$c;
}
}
?>
</body>
</html>

