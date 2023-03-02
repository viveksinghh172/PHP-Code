<?php
$name=$_REQUEST['t1'];
$pass=$_REQUEST['t2'];
if($_REQUEST['sub1'])
{
	if(file_exists("admin/userss/$name.txt") and file_exists("admin/userss/$pass.txt"))
	{
		session_start();
		$_SESSION['usr']=$name;
		echo "<script>location.href='admin/home.php'</script>";
		
	}
	else
	{
	 $er="Sorry user name and password not matched";
	 }
}
?>
<html>
<!--<script type="text/javascript">
Function disableBackbutton()
{
	window.history.forward();
	settimeout("disableBackbutton()",0);
}
</script>-->
<head>


</head>

<body><table width="170" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td>
<form method="post" enctype="multipart/form-data" name="frm1">
<table width="170" border="0" align="center" cellpadding="0" cellspacing="0" background="images/img.gif">
  <tr>
    <td height="30" colspan="2"><table width="173" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFFFFF; text-align:center">Admin Login</td>
      </tr>
    </table></td>
    </tr>
	<tr>
	<td colspan="2" align="center"><?php echo "<font color='red'>$er</font>";?></td>
	</tr>
    <tr>
    <td width="76" height="30" style="padding-left:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; color:#FFFFFF; text-align:center;"><div align="right"><strong>User name:</strong></div></td>
    <td width="97" style="padding-left:5px;"><input name="t1" type="text" id="t1" size="10" required /></td>
  </tr>
  <tr>
    <td height="30" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; color:#FFFFFF; text-align:center;"><div align="right"><strong>Password:</strong></div></td>
    <td style="padding-left:5px;"><input name="t2" type="password" id="t2" size="10" required/></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center" style="margin-bottom:10px">
        <input name="sub1" type="submit" id="sub1" value="Sign In"/>
        </div>    </td>
  </tr>
</table>
</form></td></tr></table>
</body>
</html>
