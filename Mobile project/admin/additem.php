<?php
include("config.php");
$cat=$_REQUEST["cat"];
$model=$_REQUEST["model"];
$price=$_REQUEST["price"];
$camera=$_REQUEST["cam"];
$sim=$_REQUEST["sim"];
$type=$_REQUEST["type"];
$des=nl2br($_REQUEST["desc"]);
$image=$_FILES['file']['name'];
$item_id="a".rand();
if($_REQUEST['sub'])
{
	if(mysql_query("insert into additem values('$item_id','$cat','$model','$price','$camera','$sim','$type','$image','$des',NOW())"))
	{
		move_uploaded_file($_FILES['file']['tmp_name'],"mobileimages/$cat/$image");
		echo "<font size=4 color=red>data insert sucessfully</font>";
	}
	else
	{
		echo "<font size=4 color=red>Data is not inserted</font>";
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
function vali()
{
if(document.form1.model.value=="")
{
	alert("enter model no.");
	document.form1.model.focus();
	return false;
}
else if(document.form1.price.value=="")
{
	alert("enter price");
	document.form1.price.focus();
	return false;
}
	else 
	{
		return true;
	}
}
</script>
</head>

<body><table width="680" height="360" align="center" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
	<tr>
		<td>
<form id="form1" name="form1" method="post" onsubmit="return vali()" enctype="multipart/form-data">
<table align="center" width="400" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="95"><div align="right">Category : </div></td>
    <td width="290">
      <label>
      <select name="cat" id="cat" >
        <option value="nokia" selected="selected">Nokia</option>
        <option value="samsung">Samsung</option>
        <option value="spice">spice</option>
		<option value="lg">LG</option>
		<option value="motorolla">Motorolla</option>
		<option value="sonyericson">Sony Ericson</option>
		<option value="blackbarry">Black Barry</option>
		<option value="max">Max</option>
		<option value="micromax">Micromax</option>
		<option value="vodafon">Vodafon</option>
        <option value="tata">Tata</option>
        <option value="relience">Relience</option>
      </select>
      </label> </td>
  </tr>
  <tr>
    <td><div align="right">Model No. : </div></td>
    <td>
      <label>
        <input name="model" type="text" id="model" />
        </label>
    </td>
  </tr>
  <tr>
    <td><div align="right">Price : </div></td>
    <td>
      <label>
        <input name="price" type="text" id="price" />
        </label>
    </td>
  </tr>
  <tr>
    <td><div align="right">Camera : </div></td>
    <td>
      <label>
        <select name="cam" id="cam">
          <option value="sel" selected="selected">Select</option>
          <option value="No">No</option>
          <option value="1.3 Px">1.3 Pixal</option>
          <option value="2.0 Px">2.0 Pixal</option>
          <option value="3.0 Px">3.0 Pixal</option>
          <option value="5.0 Px">5.0 Pixal</option>
        </select>
        </label>
    </td>
  </tr>
  <tr>
    <td><div align="right">Sim : </div></td>
    <td>
      <label>
        <select name="sim" id="sim">
          <option value="sel" selected="selected">Select</option>
          <option value="Singal">Singal</option>
          <option value="Double">Double</option>
          <option value="Multiple">Multiple</option>
        </select>
        </label>
    </td>
  </tr>
  <tr>
    <td><div align="right">Type : </div></td>
    <td>
      <label>
        <select name="type" id="type">
          <option value="sel" selected="selected">Select</option>
          <option value="Cdma">CDMA</option>
          <option value="Gsm">GSM</option>
          <option value="Gsm + Gsm">GSM &amp; GSM</option>
		  <option value="Cdma + Gsm">CDMA &amp; GSM</option>
		  <option value="Cdma + Cdma">CDMA &amp; CDMA</option>
        </select>
        </label>
    </td>
  </tr>
  <tr>
    <td><div align="right">Mobile image : </div></td>
    <td>
      <label>
        <input type="file" name="file" />
        </label>
    </td>
  </tr>
  <tr>
    <td><div align="right">Discraption : </div></td>
    <td>
      <label>
        <textarea name="desc" id="desc"></textarea>
        </label>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
        <label>
          <input name="sub" type="submit" id="sub" value="Submit" />
          </label>
      </div></td>
  </tr>
</table></form>
</td></tr></table>
</body>
</html>
