<?php
include("config.php");
$bra=$_REQUEST['bra'];
$branam=ucwords("$bra");
echo "<center><font size=+2 color=red>$branam</font></center>";
$ra=$_REQUEST['rad'];
   if($ra=="r1")
    {
		$sel=mysql_query("select * from additem where category='$bra'");
	}
	else if($ra=="r2")
	{
		$sel=mysql_query("select * from additem where category='$bra' and price between 1000 and 5000");
	}
	else if($ra=="r3")
	{
		$sel=mysql_query("select * from additem where category='$bra' and price between 5000 and 10000");
	}
		else if($ra=="r4")
	{
		$sel=mysql_query("select * from additem where category='$bra' and price between 10000 and 15000");
	}
	else if($ra=="r5")
	{
		$sel=mysql_query("select * from additem where category='$bra' and price >=15000");
	}
	else
	{
		$sel=mysql_query("select * from additem where category='$bra'");
	}
	
$a=4;
echo "<table><tr>";
while($arr=mysql_fetch_array($sel))
{
	if($a==4)
	{
		echo "</tr>";
		$a=0;
	}
$id=$arr['item_id'];
$cat=$arr['category'];
$img = $arr['image'];
$path="admin/mobileimages/$cat/$img";
$mod=$arr['model'];
echo "<td>";
 ?>
 <html>
 <head>
 <style type="text/css">
<!--

-->
</style>
</head>
 <div id="item" style="padding-right:10px; margin-top:10px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#01458C; font-weight:bold; text-align:center"><?php echo $mod;?>
			<div id="item"><a href="index.php?view=2 && iid=<?php echo $id;?>"><img src="<?php echo $path;?>" width="139" height="184" /></a></div>
			<div id="item"><table width="139" border="0"cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td width="68" height="34"><a href="index.php?view=2 && iid=<?php echo $id;?>"><img src="images/view.gif" width="65" height="30" /></a></td>
    <td width="69" align="left"><a href="index.php?log=2 && iid=<?php echo $id;?>"><img src="images/add.gif" width="65" height="30" /></a></td>
  </tr>
</table>
</div>

		  </div>
		  <?php
		  $a++;
		  if($a==4)
		  {
		  echo "<tr>";
		  }
		  echo "</td>";
}
echo "</tr></table>";
?>