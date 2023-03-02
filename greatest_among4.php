<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





<?php


echo "<h3 align='center'>Heighest among four numbers</h3>";


$a=10;
$b=50;
$c=30;
$d=40;

    if($a>$b)
    {

        if($a>$c)
        {
        
            if($a>$d)
            {
               echo"$a is heighest";
            }

            else
            {
               echo "$d is heighest";
            } 



        }

    } 

    if($b>$c)
    {

        if($b>$d)
        {
           echo "$b is heighest";
        }

        else
        {
           echo "$d is greater";
        }

    }

    if($c>$d)
    {

    	echo "$c is greater";

    }
    else
    {
    	echo "$d is heighest";
    }






?>






</body>
</html>