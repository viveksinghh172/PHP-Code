<?php
include("config.php");
$up=$_REQUEST['up'];
$sel=mysql_query("select * from additem where item_id='$up'");
$arr=mysql_fetch_array($sel);
$cat=$_REQUEST['cat'];
$model=$_REQUEST['model'];
$price=	$_REQUEST['price'];
$camera=$_REQUEST['cam'];
$sim=$_REQUEST['sim'];
$type=$_REQUEST['type'];
$image=$_FILES['file']['name'];
$des=nl2br($_REQUEST['desc']);
if($_REQUEST['sub'])
{
	if(mysql_query("update additem set category='$cat',model='$model',price='$price',camera='$camera',sim='$sim',type='$type',des='$des' where item_id='$up'") or die("not execute"))
	{
		move_uploaded_file($_FILES['file']['tmp_name'],"mobileimages/$cat/$image");
		echo "<font size=4 color=red>Data updated</font>";
	}
	else
	{
		echo "<font size=4 color=red>Data not updated</font>";
	}
}

?>
<form method="post" enctype="multipart/form-data">
<table width="389" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="164">Category</td>
    <td width="225"><label>
      <select name="cat" id="cat">
	  <option value="<?php echo $arr['category'];?>"><?php echo $arr['category'];?></option>
        <option value="nokia">Nokia</option>
		<option value="samsung">Samsung</option>
        <option value="lg">LG</option>
        <option value="spice">Spice</option>
        <option value="other">Other</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Model No </td>
    <td><input name="model" type="text" id="model" value="<?php echo $arr['model'];?>"></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input name="price" type="text" id="price" value="<?php echo $arr['price'];?>"></td>
  </tr>
  <tr>
    <td>camera</td>
    <td><select name="cam" id="cam">
	<option value="<?php echo $arr['camera'];?>"><?php echo $arr['camera'];?></option>
      <option value="no">No</option>
          <option value="1.3">1.3 Pixal</option>
          <option value="2.0">2.0 Pixal</option>
          <option value="3.0">3.0 Pixal</option>
          <option value="5.0">5.0 Pixal</option>
        </select></td>
  </tr>
  <tr>
    <td>Sim</td>
    <td><select name="sim" id="sim">
	<option value="<?php echo $arr['sim'];?>"><?php echo $arr['sim'];?></option>
      <option value="singal">Singal</option>
          <option value="double">Double</option>
          <option value="multiple">Multiple</option>
        </select></td>
  </tr>
  <tr>
    <td>Type</td>
    <td><select name="type" id="type">
	<option value="<?php echo $arr['type'];?>"><?php echo $arr['type'];?></option>
      <option value="cdma">CDMA</option>
          <option value="gsm">GSM</option>
          <option value="cdgs">CDMA &amp; GSM</option>
        </select></td>
  </tr>
  <tr>
    <td>Image</td>
    <td><label>
      <input type="file" name="file">
    </label></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="desc" rows="4" id="desc"><?php echo $arr['des'];?></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label>
      <input name="sub" type="submit" id="sub" value="Update">
    </label></td>
    </tr>
</table>

</form>