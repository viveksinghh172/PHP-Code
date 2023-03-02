<?php
include("config.php");
if($_REQUEST['del']!=NULL)
{
	$c1=$_REQUEST['c1'];
	$flag=0;
	foreach($c1 as $c)
	{
		if(mysql_query("delete from additem where item_id='$c'"))
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
		echo "<font size=4 color=red>Record deleted</font>";
	}
	else
	{
		echo "<font size=4 color=red>Record not delete</font>";
	}
}

?>
<form method="post" name="f1">
<table align="center" border="0" width="400">
 <tr>
    <td colspan="5">
        <input name="del" type="submit" id="del" value="Delete" />
    
    </td>
  </tr>
  <tr>
    <td><input name="c" type="checkbox" value="" /></td>
<td>ITEM_ID</td>
	<td>CATEGORY</td>
    <td>MODEL</td>
    <td>PRICE</td>
  </tr>
<?php
$sel1=mysql_query("select * from additem order by category");
while($arr1=mysql_fetch_array($sel1))
{
	$itemid=$arr1['item_id'];
	$cat=$arr1['category'];
	$model=$arr1['model'];
	$price=	$arr1['price'];
	echo "<tr><td><input type='checkbox' name='c1[]' value='$itemid'></td>";
	echo "<td>$itemid</td>";
	echo "<td>$cat</td>";
	echo "<td>$model</td>";
	echo "<td>$price</td></tr>";
}
?>
<tr>
    <td colspan="5"><input name="del" type="submit" id="del" value="Delete" /></td>
  </tr>

</table>
</form>