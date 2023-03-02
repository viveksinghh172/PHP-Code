<?php
$usrname=$_REQUEST['t1'];
$pass=$_REQUEST['t2'];
if($_REQUEST['sub'])
{
	if(file_exists("userss/$usrname.txt") and file_exists("userss/$pass.txt"))
	{
		session_start();
		$_SESSION['usr']=$usrname;
		header("location:home.php");
	}
	else 
	{
		$error="usrname and password not correct"; 
	}
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
        <td width="278" height="420" align="left" valign="top"><img src="images/motorola-atrix-europe.jpg" width="139" height="184" vspace="10" /><img src="images/samsung-i9001-galaxy-s-plus.jpg" width="139" height="184" vspace="10" /><div style="float:left; width:278; margin-top:20px"><img src="images/samsung-e2652w-champ-duos.jpg" width="139" height="184" /><img src="images/se-xperia-mini-ofic.jpg" width="139" height="184" /></div></td>
        <td width="724" align="center"><table width="350" height="180" align="center" border="2" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
	<tr>
		<td><form name="form1" method="post"><table width="350" align="center" border="0" cellpadding="3" cellspacing="5">
          <tr>
		  <td colspan="2" align="center"><?php echo "<font color='red'><b>$error</b></font>"; ?></td>
          </tr>
		  <tr>
            <td width="113"><div align="right">User name : </div></td>
            <td width="372"><label>
              <input name="t1" type="text" id="t1" size="30" />
            </label></td>
          </tr>
          <tr>
            <td><div align="right">Password : </div></td>
            <td><input name="t2" type="password" id="t2" size="30" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><label>
			  <input name="sub" type="submit" id="sub" value="Submit" />
			</label></td>
			</tr>
        </table>
        </form></td></tr></table></td>
      </tr>
	  <tr>
	  <td height="100" colspan="2" align="center" bgcolor="#0184DE">&copy;copyright @ mobileworld 2011-12</td>
	  </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
