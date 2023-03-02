<?php
session_start();
$str=md5(microtime());
$st=substr($str,0,6);
$col=array("red","green","purple","pink");
$face=array("vardana","arial","helvetica","sens-serif","times new roman");
$colr=array_rand($col);
$facer=array_rand($face);
$_SESSION['cap']=$st;
echo "<font size=5 color='$col[$colr]' face='$face[$facer]' >$st</font>";


?>