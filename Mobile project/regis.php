<?php
session_start();
include("config.php");
$usrname=$_REQUEST['usrname'];
$frstname=$_REQUEST['frst'];
$lastname=$_REQUEST['last'];
$gen=$_REQUEST['gender'];
$pass=md5($_REQUEST['pass']);
$conpass=md5($_REQUEST['cpass']);
$email=$_REQUEST['eid'];
$address=$_REQUEST['add'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$country=$_REQUEST['select'];
$mobile=$_REQUEST['mob'];
if($_REQUEST['sub'])
{
		if($pass==$conpass)
		{
			$sel=mysql_query("select uname from registration where uname='$usrname'");
			$arr=mysql_fetch_array($sel);
			if($_REQUEST['cap']==$_SESSION['cap'])
			{
				if($arr['uname']!=$usrname)
				{
					if(mysql_query("insert into registration values ('$usrname','$frstname','$lastname','$gen','$pass','$email','$address','$city','$state','$country','$mobile',NOW())"))
					{
					$error="Registration completed";
					}
					else
					{
						$error="Not completed";
					}
				}
				else
				{
					$error="user name already exists";
				}
			}
			else
			{
				$error="captcha not correct";
			}
		}
		else
		{
			$error="confirm password is not matched";
		}
}
			?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>MobileWorld</title>
<style type="text/css">
<!--
.style2 {color: #3399CC;
font-weight:bold;
font-size:22px;
}
.style5 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; color: #333; }
-->
</style>
<script>
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
function vali()
{
	var usrname=/^[a-zA-Z0-9-_]{3,30}$/;
	var frstname=/^[a-zA-Z]{1,30}$/;
	var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	var pass=/^[a-zA-Z0-9-_]{6,20}$/;
	var mobile=/^[0-9]{10,11}$/;
if(document.form1.usrname.value.search(usrname)==-1)
{
	alert("enter correct user name");
	document.form1.usrname.focus();
	return false;
}
else if(document.form1.frst.value.search(frstname)==-1)
{
	alert("enter correct first name");
	document.form1.frst.focus();
	return false;
}
else if(document.form1.pass.value.search(pass)==-1)
{
	alert("enter correct password");
	document.form1.pass.focus();
	return false;
}
else if(document.form1.eid.value.search(email)==-1)
{
	alert("enter correct email");
	document.form1.eid.focus();
	return false;
}
else if(document.form1.city.value=="")
{
	alert("enter your city");
	document.form1.city.focus();
	return false;
}
else if(document.form1.state.value=="")
{
	alert("enter your state");
	document.form1.state.focus();
	return false;
}
else if(document.form1.mob.value.search(mobile)==-1)
{
	alert("enter correct mobile number");
	document.form1.mob.focus();
	return false;
}

	else 
	{
		return true;
	}

}
</script>
</head>

<body><table width="610" height="360" align="center" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
	<tr>
		<td>
<form name="form1" method="post" enctype="multipart/form-data" onsubmit="return vali()"><table width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center" class="style2">
     Registration
    </div></td>
    </tr>
  <tr>
    <td colspan="2"><div align="center"><b><?php echo "<font color='red'>$error</font>";?></b></div></td>
    </tr>
  <tr>
    <td width="177"><div align="right" class="style5">User name : </div></td>
    <td width="323"><label>
      <input name="usrname" type="text" id="usrname" size="30">
    </label></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">First Name : </div></td>
    <td><input name="frst" type="text" id="frst" size="30"></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">Last Name : </div></td>
    <td><input name="last" type="text" id="last" size="30"></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">Gender : </div></td>
    <td><label>
      <input name="gender" type="radio" value="male" />
      Male </label>
      <label>
       <input name="gender" type="radio" value="female" />
        Female </label></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">Password : </div></td>
    <td><input name="pass" type="password" id="pass" size="30"></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">Confirm password : </div></td>
    <td><input name="cpass" type="password" id="cpass" size="30"></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">Email Id : </div></td>
    <td><input name="eid" type="text" id="eid" size="30"></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">Address :</div></td>
    <td><label>
      <textarea name="add" cols="27" id="add"></textarea>
    </label></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">City : </div></td>
    <td><input name="city" type="text" id="city" size="30"></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">State : </div></td>
    <td><input name="state" type="text" id="state" size="30"></td>
  </tr>
  <tr>
    <td><div align="right" class="style5">Country : </div></td>
    <td><label>
                      <select name="select">
                        <option selected>India</option>
                        <option>Pakistan</option>
                        <option>Australia</option>
                        <option>United state</option>
                        <option>Japan</option>
                        <option>Canada</option>
                        <option>South Africa</option>
                      </select>
                      </label>                    </td>
  </tr>
  <tr>
    <td><div align="right" class="style5">Mobile :</div></td>
    <td><input name="mob" type="text" id="mob" size="30"></td>
  </tr>
  <tr>
    <td valign="top"><div align="right" class="style5">Word Verification :</div></td>
    <td>Type the character you see in bleow <br>
      <?php include("captcha.php"); ?>        </td>
  </tr>
  <tr>
        <td align="left" valign="top" class="style2">&nbsp;</td>
        <td><label>
        <input name="cap" type="text" id="cap" onfocus="clearText(this)" onblur="clearText(this)" value="Enter this character here..." size="30" />
        </label></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <label>
      <input name="sub" type="submit" id="sub" value="Submit">
      </label>
    </div></td>
    </tr>
</table>
</form></td></tr></table>
</body>
</html>
