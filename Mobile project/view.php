<?php 
include("config.php");
$iid=$_REQUEST['iid'];
$sel=mysql_query("select * from additem where item_id='$iid'");
$arr=mysql_fetch_array($sel);
$cat=$arr['category'];
$img = $arr['image'];
$path="admin/mobileimages/$cat/$img";
?>
<table width="610" height="360" align="center" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
	<tr>
		<td>
<form name="form1" method="post" enctype="multipart/form-data"><table width="570" style="margin-top:10px" height="250" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="210" rowspan="7" align="center"><img src="<?php echo $path;?>" width="170" height="220" /></td>
    <td width="90"><div align="left">Category : </div></td>
    <td width="130"><?php echo $arr['category'];?></td>
    <td width="125" rowspan="7" align="left" valign="middle"><a href="index.php?log=2 && iid=<?php echo $iid;?>"><img src="images/buy_blue.png" width="120" height="120" /></a></td>
  </tr>
  <tr>
    <td width="82"><div align="left">Model No : </div></td>
    <td><?php echo $arr['model'];?></td>
    </tr>
  <tr>
    <td width="82"><div align="left">Price : </div></td>
    <td><?php echo $arr['price'];?></td>
    </tr>
  <tr>
    <td width="82"><div align="left">Camara : </div></td>
    <td><?php echo $arr['camera'];?></td>
    </tr>
  <tr>
    <td width="82"><div align="left">Type : </div></td>
    <td><?php echo $arr['type'];?></td>
    </tr>
  <tr>
    <td width="82"><div align="left">Sim : </div></td>
    <td><?php echo $arr['sim'];?></td>
    </tr>
  <tr>
    <td width="82" valign="top"><div align="left">Discription : </div></td>
    <td valign="top"><?php echo $arr['des'];?></td>
    </tr>
</table>
</form></td></tr></table>