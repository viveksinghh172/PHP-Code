<?php
include("config.php");
$iid=$_REQUEST['iid'];
$name=$_REQUEST['t1'];
$pass=md5($_REQUEST['t2']);
if($_REQUEST['sub'])
{
	$sel=mysql_query("select uname, pass from registration where uname='$name'");
	$arr=mysql_fetch_array($sel);
	if($arr['uname']==$name and $arr['pass']==$pass)
	{
		$_SESSION['uname']=$name;
		echo "<script>location.href='orders.php?iid=$iid'</script>";
	}
	else
	{
		$error="User name and password is not matched";	
	}
}
?>
<html>
<head>
<script>
function vali()
{
	var name=/^[a-zA-Z0-9-_]{3,30}$/;
	var pass=/^[a-zA-Z0-9-_]{6,20}$/;
if(document.form1.t1.value.search(name)==-1)
{
	alert("Please enter correct user name");
	document.form1.t1.focus();
	return false;
}
else if(document.form1.t2.value.search(pass)==-1)
{
	alert("Please enter correct password");
	document.form1.t2.focus();
	return false;
}
else 
	{
		return true;
	}
}
</script>
<script>
function cook()
{
	if("<?php echo $_COOKIE['uname'];?>"!=null)
	{
		if(document.form1.t1.value=="<?php echo $_COOKIE['uname'];?>")
		{
			document.form1.t2.value="<?php echo $_COOKIE['pass'];?>";
		}
		else
		{
			document.form1.t2.value="";
		}
	}
}

</script>
</head>

<body><table width="610" height="360" align="center" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
<tr>
	<td>
<div align="center" style="margin-bottom:20px"><font color="#0033FF" face="Georgia, Times New Roman, Times, serif" size="-1" style="text-align:center">You must login for buy this product. New user create new account.</font></div>
<form method="post" enctype="multipart/form-data" name="form1" onSubmit="return vali()">
<table width="400" height="200" border="0" align="center" cellpadding="0" cellspacing="0" background="images/img.gif">
  <tr>
    <td height="40" colspan="2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td style="font-family:'Times New Roman', Times, serif; font-size:25px; font-weight:bold; color:#FFFFFF; text-align:center;">Log in with your account </td>
      </tr>
    </table></td>
    </tr>
	<tr>
	<td colspan="2" align="center"><?php echo "<font color='red'>$error</font>";?></td>
	</tr>
    <tr>
    <td width="152" height="35" style="padding-left:10px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; text-align:center;"> User name:</td>
    <td width="248">
      <input type="text" name="t1" id="t1" onChange="cook()" />    </td>
  </tr>
  <tr>
    <td height="35" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; text-align:center;">Password :</td>
    <td><input type="password" name="t2" id="t2"/></td>
  </tr>
  <!-- <tr>
     <td colspan="2"><label>
      <div align="center">
        <input name="c1" type="checkbox" id="c1" value="checkbox" />
        Remember me </div>
    </label></td> 
  </tr> -->
  <tr>
    <td colspan="2">
      <div align="center">
        <input name="sub" type="submit" id="sub" value="Sign In"/>
        <input name="button" type="button" id="button" value="Sign Up" onClick="location.href='index.php?reg=3'"/>
        </div>    </td>
  </tr>
  <!-- <tr>
  <td colspan="2"><div align="center" style="font-family:Verdana; font-size:12px">Forgot Your Password</div></td></tr> -->
</table>
</form></td></tr></table>
</body>
</html>
