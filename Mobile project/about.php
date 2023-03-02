<?php
session_start();
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
.ourpartner {
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

<body>
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
	 <div align="center"><div style="width:850px;"><marquee onmouseover="stop()" onmouseout="start()" ><strong><font style="size:14px; color:#CC0033">WORKING UNDER PROCESS &nbsp;&nbsp;&nbsp;&nbsp;WORKING UNDER PROCESS &nbsp;&nbsp;&nbsp;&nbsp;WORKING UNDER PROCESS &nbsp;</font></strong></marquee></div></div>
	<!--<div align="center"><div style="width:850px;" class="dec"><marquee onmouseover="stop()" onmouseout="start()" ><font color="#DD0000"><b>Welcome to Mobile World :-</b>&nbsp;&nbsp;&nbsp;<a href="index.php?con=nokia">Nokia</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=samsung">Samsung</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=spice">Spice</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=lg">LG</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=micromax">Micromax</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=motorolla">Motorolla</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=sonyericson">Sony Ericson </a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=blackbarry">Black berry </a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=max">Max</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=vodafon">Vodafone</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=tata">Tata</a>&nbsp;&nbsp;&nbsp;<a href="index.php?con=relience">Relience</a></font>
	</marquee></div></div>-->
	<div id="container">
	  <div id="left">
		<div id="cat" style="height:38px; width:173px; font:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; text-align:center; line-height:30px; font-weight:bold;">Category </div>
		<div id="cat" style="background-image:none;border:solid #CCCCCC;
border-width:thin;">
<ul style="list-style-image:url(../images/123.gif); line-height:25px;" class="under">
		<li><a href="index.php?con=nokia">Nokia</a></li>
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
	<div style="float:left; width:800px; margin-left:10px">
	  <center><font face="Lucida Handwriting" size="+2" color="#00CCFF" style="font-weight:bold">About Us</font></center>
	  <p align="justify">The Mobiles format is a one stop mobile solution shop that provides, multi brand handsets, accessories, connections, repairs, VAS etc all under one roof.</p>
	  <p align="justify">The MobileWorld currently has over 1300 outlets and the vision is to have a network of 1500 stores by 2011 across 200 cities, thus covering virtually every major town in every state across India.</p>
	  <p align="justify">The Mobiles outlets are in three formats: Large - 1000-1500 square feet, Medium - 800-1000 square feet and small - 150-200 square feet. Key thrust areas for the retail format are: Comprehensive Product Range, Knowledgeable Store Staff & Interactive Environment, Competitive Prices and Handset Repairs.      </p>
      <p align="justify">The MobileWorld caters to the Indian consumer‘s choice of the widest and most comprehensive range of mobile phones with special offers from all the key brands available across the globe. The MobileWorld offers complete telecom solutions right from handset purchase to the choice of service operator and miscellaneous services like monthly bill collections etc., the stores also offer connections (pre paid and post paid), accessories and VAS including the latest ring tones, wallpapers and gaming and prompt after sales service, available not only in the city of purchase but in all The MobileWorld outlets across the country.</p>
      <p align="justify">The MobileWorld undertaken an extensive training program to equip all its employees with in-depth knowledge of the products and brands available at the store, thereby allowing them to provide the right kind of guidance to the customer.The MobileStore has categorized its mobile device offerings into consumer segments keeping in mind the profiles and needs of different consumers. The unique segments available in The Mobileworld are: Business - PDA & Smartphones, Emails, data transfer etc., Lifestyle - Fashion phones, Look and elegance, Fun - Multimedia & music, camera, games, Value for Money - Special offers, discounts and budget phones.</p>
      <p align="justify">All major handset brands like Nokia, Sony Ericsson, LG, Samsung, Motorola, Fly, Sagem, HP, iMate, Dopod, HTC and Blackberry are available at the store. The MobileStore has also tied up with all leading operators including Airtel, Vodafone, BPL, Idea, MTNL/BSNL and Reliance, Tata Indicom.</p>
	
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
  <br /><font style="font-size:10px; font-family: Verdana; font-weight:bold">&copy;copyright @ mobileworld 2012 | Designed by pankaj</font></div></div>


</div>
</div>
<!--<div style="float:right; width:160px; margin-top:15px;"><div align="left"><a href="#"><img src="images/banner_dell.gif" width="150" border="0" style="margin-top:15px"/></a><a href="#"><img src="images/banner_nokia.jpg" width="150" border="0" style="margin-top:15px" /></a></div>
</div>-->
</body>
</html>
