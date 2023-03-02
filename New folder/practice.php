<?php

function mytest()
{
	static $a=0;
	echo "<br>$a";
	$a++;

}
mytest();
mytest();
mytest();
mytest();

?>