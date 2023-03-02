<?php
include("config.php");
if($_REQUEST['up1'])
{
	$up1=$_REQUEST['up1'];
	mysql_query("delete from additem where item_id='$up1'");
	echo "<font size=4 color=red>record delete sucessfully</font>";
}
//if($_REQUEST['sub'])
//{
//$cat=$_REQUEST['cat'];
$sel=mysql_query("select * from additem order by category");
echo "<table align='center' width='450' border=0>";
while($arr=mysql_fetch_array($sel))
{
	$iid=$arr['item_id'];
	$cat=$arr['category'];
	$mod=$arr['model'];
	$pri=$arr['price'];
	echo "<tr><td>$iid</td><td>$cat</td><td>$mod</td><td>$pri</td><td>";
?>
<input type='button' value='update' onclick='location.href="home.php?up=<?php echo $iid;?>"'>
<input type='button' value='Delete' onclick='location.href="home.php?up1=<?php echo $iid;?>"'>
<?php 
echo "</td></tr>";
}
echo "</table>";
// }
?>