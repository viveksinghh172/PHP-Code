<form>
Press any no b/w 1 to 5
<input type="text" name="n">
<input type="submit" name="submit" value="Show">
<?php
if(isset($_REQUEST['submit']))
{
$x=$_REQUEST['n'];

if($x==1)
echo "one";
else if($x==2)
echo "Two";
else if($x==3)
echo "Three";
else if($x==4)
echo "Four";
else if($x==5)
echo "Five";
else
echo "<br>Out of five";

}
?>