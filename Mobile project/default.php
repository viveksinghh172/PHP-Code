<?php
include("config.php");
$sel=mysql_query("select * from additem where category='nokia' limit 4");
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
<?php
$sel1=mysql_query("select * from additem where category='samsung' limit 4");
$a1=4;
echo "<table><tr>";
while($arr1=mysql_fetch_array($sel1))
{
	if($a1==4)
	{
		echo "</tr>";
		$a1=0;
	}
$id=$arr1['item_id'];
$cat=$arr1['category'];
$img = $arr1['image'];
$path="admin/mobileimages/$cat/$img";
$mod=$arr1['model'];
echo "<td>";
 ?>
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
		  $a1++;
		  if($a1==4)
		  {
		  echo "<tr>";
		  }
		  echo "</td>";
}
echo "</tr></table>";
?>