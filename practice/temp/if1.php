<form>
Press 1 to display Message
<input type="text" name="n">
<input type="submit" name="submit" value="Show">
<?php
if(isset($_REQUEST['submit']))
{
$x=$_REQUEST['n'];
if($x==1)
{
echo "<br>Hello PHP how are you"; 	
echo "<br>PHP is a server side languyge";
}
}
?>