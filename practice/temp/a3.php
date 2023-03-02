<?php
$ar=array("PHP"=>array("Core"=>array("Basic","input","Database"),"Advance"=>array("STM","MVC","OOPS"),"CMS"=>array("Word Press","Joomla","Majanto")),"Java"=>array("Core"=>array("OOPS","Thread","Exception"),"J2SE"=>array("AWT","SWING","JDBC"),"J2EE"=>array("JSP","Servet","Struts")),"Dot Net"=>array("C#"=>array("Cosole","Windows","ADO"),"VB"=>array("Cosole","Windows","ADO"),"ASP"=>array("HTML","ASP","MVC")));
//print_r($ar);
foreach($ar as $k=>$x)
{
	echo "<h2>$k</h2>";
	foreach($x as $n=>$t)
	{
	echo "<h3>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp$n</h3>";
	foreach($t as $p)
	{

echo "<h4>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $p</h4>";		
		}
	}
	}
?>