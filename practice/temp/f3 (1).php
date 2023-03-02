<html>
<body bgcolor="#00FF99" text="#FF0000">
<?php
$a=$_REQUEST['f'];
$b=$_REQUEST['s'];
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
/*echo "First no is=$a";
echo "<br>Second is=$b";
echo "<br>Add is=$c";
echo "<br>Sub is=$d";
echo "<br>Mul is=$e";
echo "<br>Div is=$f";


echo "<br>$a +  $b  =  $c";
echo "<br>$a -  $b  =  $d";
echo "<br>$a *  $b  =  $e";
echo "<br>$a /  $b  =  $f";
*/
echo "<center><table border=1 cellspacing=10 cellpadding=10>";
echo "<tr><td>$a</td><td>+</td><td>$b</td><td>=</td><td>$c</td></tr>";
echo "<tr><td>$a</td><td>-</td><td>$b</td><td>=</td><td>$d</td></tr>";
echo "<tr><td>$a</td><td>*</td><td>$b</td><td>=</td><td>$e</td></tr>";
echo "<tr><td>$a</td><td>/</td><td>$b</td><td>=</td><td>$f</td></tr>";
echo "</table></center>";
?>
</body>
</html>