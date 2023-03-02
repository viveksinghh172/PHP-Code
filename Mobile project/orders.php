<?php
session_start();
$name=$_SESSION['uname'];
include("config.php");
$sel1=mysql_query("select frstname, lstname, email from registration where uname='$name'");
$arr1=mysql_fetch_array($sel1);
$email=$arr1['email'];
$iid=$_REQUEST['iid'];
$cat=$_REQUEST['t2'];
$mod=$_REQUEST['t3'];
$price=$_REQUEST['t4'];
$nam=$_REQUEST['t5'];
$contact=$_REQUEST['t6'];
$add=nl2br($_REQUEST['t7']);
$pin=$_REQUEST['t8'];
$acc=$_REQUEST['t9'];
$bank=$_REQUEST['bank'];
$orderid="ord".rand();
$txt="Thank you for using MobileWorld"."\n"."Your requested mobile is $mod"."\n"."Your order id is $orderid";
$sel=mysql_query("select * from additem where item_id='$iid'");
$arr=mysql_fetch_array($sel);
if($_REQUEST['sub'])
{
	if(mysql_query("insert into orders values('$orderid','$iid','$cat','$mod','$price','$nam','$contact','$add','$pin','$acc','$bank',NOW())"))
	{
		mail("$email","Mobile Request",$txt, "From: pankajkumargrg@gmail.com");
	  session_destroy();
		echo "<script>location.href='index.php?ord=$orderid && mail=$email'</script>";
	}
	else
	{
		echo "<font size=4 color=red>order failed</font>";
	}
}

if($_REQUEST['log']=='out')
{
	session_destroy();
	header("location:index.php");
}
if($name=="")
{
	header("location:index.php");
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
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style></head>

<script>
function vali()
{
	var name=/^[a-zA-Z]{1,30}$/;
	var mobile=/^[0-9]{10,11}$/;
if(document.form1.t6.value.search(mobile)==-1)
{
	alert("Please enter correct Mobile No.");
	document.form1.t6.focus();
	return false;
}
else if(document.form1.t7.value=="")
{
	alert("Please enter your address");
	document.form1.t7.focus();
	return false;
}
else if(document.form1.t9.value=="")
{
	alert("Please enter your account no.");
	document.form1.t9.focus();
	return false;
}
else if(document.form1.t10.value=="")
{
	alert("Please enter Bank Name");
	document.form1.t10.focus();
	return false;
}
	else 
	{
		return true;
	}

}
</script>
<body>
<table width="1002" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td bgcolor="#0066CC"><div style="float:left; width:900px" align="center"><h2>Welcome :&nbsp;<?php echo $name;?></h2></div>
	<div class="style1" style="float:right; width:100px; margin-top:5px;"><a href="?log=out">Logout</a></div></td>
  </tr>
  <tr>
    <td height="221"><img src="images/banner1.jpg" width="1002" height="240" /></td>
  </tr>
  <tr>
    <td bgcolor="#0099CC"><form name="form1" method="post" onsubmit="return vali()">
<table width="700" border="0" cellpadding="3" cellspacing="4" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="231" valign="top"><div align="right"><strong>Item Id :</strong></div></td>
    <td width="445"><input name="t1" type="text" id="t1" size="30" value="<?php echo $iid;?>" readonly="readonly"></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Category :</strong></div></td>
    <td><input name="t2" type="text" id="t2" size="30" value="<?php echo $arr['category'];?>"  readonly="readonly"></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Model :</strong></div></td>
    <td><input name="t3" type="text" id="t3" size="30" value="<?php echo $arr['model'];?>" readonly="readonly"></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Price :</strong></div></td>
    <td><input name="t4" type="text" id="t4" size="30" value="<?php echo $arr['price'];?>" readonly="readonly"></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Name :</strong></div></td>
    <td>
        <input name="t5" type="text" id="t5" size="30" value="<?php echo $arr1['frstname'];?>&nbsp;<?php echo $arr1['lstname'];?>" readonly="readonly">            </td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Mobile No. : </strong></div></td>
    <td><input name="t6" type="text" id="t6" size="30"></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Address :</strong></div></td>
    <td><textarea name="t7" cols="27" id="t7"></textarea></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Pin :</strong></div></td>
    <td><input name="t8" type="text" id="t8" size="30"></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Account No. :</strong></div></td>
    <td><input name="t9" type="text" id="t9" size="30"></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Bank Name : </strong></div></td>
    <td><label>
      <select name="bank">
        <option value="select" selected="selected">select</option>
        <option value="sbbj">State bank of Bikaner and jaipur</option>
        <option value="sbi">State bank of India</option>
        <option value="pnb">Panjab national bank</option>
        <option value="ob">Oriental bank</option>
        <option value="icici">ICICI</option>
        <option value="bob">Bank of Badoda</option>
      </select>
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
</form></td>
  </tr>
  <tr>
    <td height="100" bgcolor="#0066CC"><div align="center"><font style="font-size:10px; font-family: Verdana; font-weight:bold">&copy;copyright @ mobileworld 2012 | Designed by pankaj</font></div></td>
  </tr>
</table>
</body>
</html>
