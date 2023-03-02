<html>
<body bgcolor="#00FF00" text="#FF0000">
<center>
<form>
Enter No<input type="text" name="n">
<input type="submit" name="submit" value="Show">
</form>
<?php
if(isset($_REQUEST['submit']))
{
$n=$_REQUEST['n'];
$c=0;
$s=0;
$ev=0;
$od=0;
$pr=0;
$min=9;
$max=0;
while($n>0)
{
$c=$c+1;
$m=intval($n%10);
$s=$s+$m;
if(intval($m%2)==0)
$ev=$ev+1;
else
$od=$od+1;
if($m<$min)
$min=$m;
if($m>$max)
$max=$m;
$t=0;
for($i=1;$i<=$m;$i++)
{
if(intval($m%$i)==0)
$t=$t+1;
}
if($t==2)
$pr=$pr+1;


$n=intval($n/10);
}



echo "<br>Total Digit=$c";
echo "<br>Sum of Digit is=$s";
echo "<br>Total Event Digigt=$ev";
echo "<br>Total ODD Digigt=$od";
echo "<br>Total Prime Digigt=$pr";
echo "<br>Min digit is=$min";
echo "<br>Max digit is=$max";

}
?>
</center>
</body>
</html>