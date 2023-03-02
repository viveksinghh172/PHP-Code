<?php
session_start();
$usrname=$_SESSION['usr'];
if($_REQUEST['log']=='out')
{
	session_destroy();
	header("location:../index.php");
}
if($usrname=="")
{
	header("location:../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #0099CC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.under a{text-decoration:none}
-->
</style></head>

<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2"><img src="images/banner1.jpg" width="1002" height="200" /></td>
        </tr>
      <tr>
        <td width="183" height="420" align="center" valign="top">
		<ul style="margin-top:15px; line-height:25px" class="under">
		<a href="home.php">Home</a><br />
		<a href="?con=add">Add Item</a><br />
		<a href="?con=upd">Update Item</a><br />
		<a href="?con=del">Delete Item</a><br />
		<a href="?log=out">Logout</a>
		</ul></td>
        <td width="700" align="center"><div style="margin-top:10px"></div>
		<?php
		switch($_REQUEST['con'])
		{
			case 'add' : include("additem.php");
			break;
			case 'upd' : include("update.php");
			break;
			case 'del' : include("delete.php");
			break;
		}
		if($_REQUEST['up'])
	 	{
 			include("upitem.php");
 		}
		if($_REQUEST['up1'])
 		{
 			include("update.php");
		}
		
		?>
		</td>
      </tr>
	  <tr>
	  <td height="100" colspan="2" align="center" bgcolor="#0184DE">&copy;copyright @ 2011-12</td>
	  </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
