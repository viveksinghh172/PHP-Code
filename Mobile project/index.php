<?php
session_start();
	error_reporting(0);
$pk=$_REQUEST["cat1"];
$rr=$_REQUEST["radio"];
if($_REQUEST['go'])
{
	echo "<script>location.href='index.php?ser=3 && bra=$pk && rad=$rr'</script>";
}
if($_REQUEST['c1'])
	{
		setcookie("uname",$name,time()+3600);
		setcookie("pass",$pass,time()+3600);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MOBILE WORLD</title>
<link href="jewl.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.ourpartner
 {
	font-family: Arial, Helvetica, sans-serif;
	color:#007700;
	font-weight: bold;
	font-size: 16px;
}
.under a{text-decoration:none}
.under a:hover{text-decoration:underline}
-->
</style>
<script>
var ind=0;
function col()
{
var arr=new Array("images/banner1.jpg","images/banner2.jpg","images/banner1.jpg","images/banner3.jpg","images/banner4.jpg");
document.img.src=arr[ind];
ind++;
if(ind==5)
{
ind=0;
}
}
setInterval("col()",3000);
</script>
</head>

<body >
<!--<div style=" float:left; width:170px; margin-top:15px"><a href="#"><img src="images/banner_swm.png" width="150" border="0" class="add" /></a><a href="#"><img src="images/banner_pc.png" border="0" class="add" /></a></div>-->
<div id="wrapper">
  <div id="main">
	<div id="header"><div id="logo" style="margin-left:10px; font-family:Arial, Helvetica, sans-serif; color:#FF0033;">Welcome Guest</div>
	<div style="float:right; width:200px;"><table width="200" border="0" cellspacing="0" cellpadding="0" style="font:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#00CCFF; text-align:right; padding-right:2px; padding-top:1px">
  <tr>
    <td width="200"><a href="http://www.facebook.com/pankajkumargrg" target="_blank"><img src="images/f_icon.jpg" /></a>&nbsp;<a href="http://www.twitter.com/pankajgrg" target="_blank"><img src="images/t_icon.jpg" /></a>&nbsp;&nbsp;&nbsp;<a href="index.php?reg=3" style="color:#0099FF; font-size:16px;">Registration</a></td>
    </tr>
  
</table>
</div>
	</div>
	<div id="header">
	<ul id="sddm">
	<li><a href="index.php">Home</a></li>
	<li><a href="about.php">About us</a></li>
	<li><a href="index.php?prod=product">Products</a></li>
	<li><a href="index.php?gal=gallery">Gallery </a></li>
	<li><a href="#">New Arrival</a></li>
	<li><a href="#">Cateloges</a></li>
	<li><a href="index.php?cont=contact">Contact us</a></li>
	</ul>
<div style="clear:both"></div>
	
	
	</div>
	<div id="header"><img src="images/banner1.jpg" width="1002" height="230" name="img"/></div>
	 <div align="center"><div style="width:850px;"><marquee onmouseover="stop()" onmouseout="start()" ><strong><font style="size:14px; color:#CC0033">WORKING UNDER PROCESS &nbsp;&nbsp;&nbsp;******* ALL DETAILS ARE NOT CORRECT *******</font></strong></marquee></div></div>
	<!--<div align="center"><div style="width:850px;" class="dec"><marquee onmouseover="stop()" onmouseout="start()" ><font color="#DD0000"><b>Welcome to Mobile World :-</b>&nbsp;&nbsp;&nbsp;<a href="index.php?con=nokia">Nokia</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=samsung">Samsung</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=spice">Spice</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=lg">LG</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=micromax">Micromax</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=motorolla">Motorolla</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=sonyericson">Sony Ericson </a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=blackbarry">Black berry </a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=max">Max</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=vodafon">Vodafone</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=tata">Tata</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=relience">Relience</a></font>
	</marquee></div></div>-->
	<div id="container">
	  <div id="left">
		<div id="cat" style="height:38px; width:173px; font:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; text-align:center; line-height:30px; font-weight:bold;">Category </div>
		<div id="cat" style="background-image:none;border:solid #CCCCCC;
border-width:thin;">
<ul style="list-style-image:url(../images/123.gif); line-height:25px;" class="under">
		<li ><a href="index.php?con=nokia">Nokia</a></li>
		 <li> <a href="index.php?con=samsung">Samsung</a></li>
		  <li><a href="index.php?con=spice">Spice</a></li>
		  <li><a href="index.php?con=lg">LG</a></li>
		  <li><a href="index.php?con=motorolla">Motorolla</a></li>
		  <li><a href="index.php?con=sonyericson">Sony Ericson </a> </li>
		  <li><a href="index.php?con=blackbarry">Black berry </a></li>
		  <li><a href="index.php?con=max">Max</a></li>
		  <li><a href="index.php?con=micromax">Micromax</a></li>
		  <li><a href="index.php?con=vodafon">Vodafone</a> </li>
		  <li><a href="index.php?con=tata">Tata</a></li>
		  <li><a href="index.php?con=relience">Relience</a></li>
	      
		</ul>
		</div>
		<div style="float:left; width:173px; margin-top:10px">
		<?php  
			include ("loginindex.php");
		?></div>
		
	
</div>
	<div id="right">
	<?php

if($_REQUEST['con'])
{
 include("cat.php"); 
}
if(!$_REQUEST['con'] and !$_REQUEST['log'] and !$_REQUEST['reg'] and !$_REQUEST['ord'] and !$_REQUEST['view'] and !$_REQUEST['cont'] and !$_REQUEST['gal'] and !$_REQUEST['ser'] and !$_REQUEST['prod'])
{
 include("default.php");
}

if($_REQUEST['log'])
{
 include("login.php"); 
}
if($_REQUEST['reg'])
{
 include("regis.php"); 
}
if($_REQUEST['ord'])
{
 include("conord.php"); 
}
if($_REQUEST['view'])
{
 include("view.php"); 
}
if($_REQUEST['cont'])
{
 include("contact.php"); 
}
if($_REQUEST['gal'])
{
 include("gallery.php"); 
}
if($_REQUEST['ser'])
{
 include("ads.php"); 
}
if($_REQUEST['prod'])
{
 include("prdct.php"); 
}


	?>
	</div>
	<div id="left">
		<div id="cat" style="height:38px; width:173px; font:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; text-align:center; line-height:30px; font-weight:bold;">Advance Search </div>
		<div id="cat" style="background-image:none; border:solid #CCCCCC;
border-width:thin;">
<form id="f1" name="f1" method="post" enctype="multipart/form-data" >
<table width="170" style="margin-bottom:5px" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25"><strong>&nbsp;Category</strong></td>
  </tr>
  <tr>
    <td align="center">
      <label>
      <select name="cat1" id="cat1" >
        <option value="nokia" selected="selected">Nokia</option>
        <option value="samsung">Samsung</option>
        <option value="spice">Spice</option>
		<option value="lg">LG</option>
		<option value="motorolla">Motorolla</option>
		<option value="sonyericson">Sony Ericson</option>
		<option value="blackbarry">Black Barry</option>
		<option value="max">Max</option>
		<option value="micromax">Micromax</option>
		<option value="vodafon">Vodafon</option>
        <option value="tata">Tata</option>
        <option value="relience">Relience</option>
      </select></label></td>
  </tr>
  <tr>
    <td height="25"><strong>&nbsp;Price Range </strong></td>
  </tr>
  <tr>
    <td><table width="170" border="0" cellspacing="0" cellpadding="4">
      <tr>
        <td><label>
          <input name="radio" type="radio" value="r1" />
         &nbsp;All Prices
        </label></td>
      </tr>
      <tr>
        <td><label>
          <input name="radio" type="radio" value="r2" />
         &nbsp;Rs. 1,000-Rs. 5,000
        </label></td>
      </tr>
      <tr>
        <td><label>
          <input name="radio" type="radio" value="r3" />
          &nbsp;Rs. 5,000-Rs. 10,000
        </label></td>
      </tr>
      <tr>
        <td><label>
          <input name="radio" type="radio" value="r4" />
          &nbsp;Rs. 10,000-Rs. 15,000
        </label></td>
      </tr>
      <tr>
        <td><label>
          <input name="radio" type="radio" value="r5" />
          &nbsp;Rs. 15,000 - Avobe
        </label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center"><br /> 
     
	  <input name="go" type="submit" id="go" value="Go&gt;&gt;"  />
   
    </div></td>
  </tr>
</table>  
</form>

		</div>
</div>

</div>
<div style="float:left; height:18px; width:970px; margin-left:15px; background:url(images/dot_line.jpg);"></div>
<div class="ourpartner" style="float:left; width:1002px"> &nbsp;&nbsp;&nbsp; Our Mobile Partners :
  <div style="float:left; width:900px;" class="margin"><marquee onmouseover="stop()" onmouseout="start()">
      <a href="http://www.airtel.in/" target="_blank"><img src="images/airtel.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/idea.gif" border="0" /></a>&nbsp;<a href="#"><img src="images/Kingston.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/mts.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/Matrixlogo.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/aircel.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/nokia.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/bb.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/mtnl.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/micromax.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/ipod.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/virgin.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/lglogo.gif" border="0" /></a>&nbsp;<a href="#"><img src="images/Matrixlogo.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/spice.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/jabra.gif" border="0" /></a>&nbsp;<a href="#"><img src="images/motorola.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/tata-docomo.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/samsung.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/max.gif" border="0" /></a>&nbsp;<a href="#"><img src="images/Reliance.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/sonyericsson.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/videocon.gif" border="0" /></a>&nbsp;<a href="#"><img src="images/sandisk.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/tata_sky.jpg" border="0" /></a>&nbsp;<a href="#"><img src="images/transcend.jpg" border="0" /></a>
  </marquee>
  </div>
  </div>
<div id="bottom"><div class="style1"><font color="#FFFFFF"><br /><br />
  <a href="index.php">Home</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="about.php">About Us</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="index.php?prod=product">Products</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="index.php?gal=gallery">Gallery</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="#">New Arrival</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="#">Cateloge</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="index.php?cont=contact">Contact Us</a></font><div style="float:right; width:50px;"><a href="http://www.facebook.com/pankajkumargrg" target="_blank"><img src="images/f_icon.jpg" /></a>&nbsp;<a href="http://www.twitter.com/pankajgrg" target="_blank"><img src="images/t_icon.jpg" /></a></div>
  <br />
  <br /><font style="font-size:10px; font-family: Verdana; font-weight:bold">&copy;copyright @ mobileworld 2015 | Designed by Sandeep Singh</font></div></div>


</div>
</div>
<!--<div style="float:right; width:160px; margin-top:15px;"><div align="left"><a href="#"><img src="images/banner_dell.gif" width="150" border="0" style="margin-top:15px"/></a><a href="#"><img src="images/banner_nokia.jpg" width="150" border="0" style="margin-top:15px" /></a></div>
</div>-->
</body>
</html>
