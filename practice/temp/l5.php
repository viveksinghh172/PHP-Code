<html>
<body>
<form>
Enter no to check Prime<input type="text" name="n">
<input type="submit" name="submit" value="Fibo">
<?php
if(isset($_REQUEST['submit']))
{
$n=$_REQUEST['n'];

$c=0;
for($i=1;$i<=$n;$i++)
{
if($n%$i==0)
$c++;
}

if($c==2)
echo "<br>$n is Prime";
else
echo "<br>$n is not prime";

}
?>
</body>
</html>

