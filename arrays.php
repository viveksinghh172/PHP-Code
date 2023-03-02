<?php
/*$ar1=array("ph","ja","dt");
$ar2=array("PHP","Java","Dot Net");
echo "<br>First array is<br>";
print_r($ar1);
echo "<br>Second array is<br>";
print_r($ar2);
$ar3=array_combine($ar1,$ar2);
echo "<br>Combine array is<br>";
print_r($ar3);


$ar1=array("ph","ja","dt");
$ar2=array("PHP","Java","Dot Net");
echo "<br>First array is<br>";
print_r($ar1);
echo "<br>Second array is<br>";
print_r($ar2);
$ar3=array_merge($ar1,$ar2);
echo "<br>Mearging array is<br>";
print_r($ar3);



$ar=array(12,3,45,5,6,4,5,7,8,9,5,4,3,5,67,8,5,4,6,7,5,6);
echo "<br>Array is<br>";
print_r($ar);
$x=sizeof($ar);
echo "<br>Total Elemetn are=$x";
$x=array_sum($ar);
echo "<br>Sum of array elemetn is=$x";


$ar=array("PHP","Java","Dot Net","oracle","Sql Server","Android");
echo "<br>Array Element are<br>";
print_r($ar);
$str=implode($ar,"  ");
echo "<br>Array is=$str";


$str="PHP is a server side lanague that is used to build dynamic web appication";
echo "<br>String is=$str";
$ar=explode(" ",$str);
echo "<br>Array is<br>";
print_r($ar);


$ar=array("php","java","dot net","oracle");
echo "<br>Array is<br>";
print_r($ar);
if(in_array("javaa",$ar))
echo "<br>found";
else
echo "<br>not found";
*/

$ar=array("b"=>"php","a"=>"java","t"=>"dot net","f"=>"oracle","g"=>"phthon");
echo "<br>Array is<br>";
print_r($ar);
/*asort($ar);
echo "<br>After sorting array element acoridng value in acending<br>";
print_r($ar);

arsort($ar);
echo "<br>After sorting array element acoridng value in decending<br>";
print_r($ar);

ksort($ar);
echo "<br>After sorting array element acoridng key in acending<br>";
print_r($ar);*/

krsort($ar);
echo "<br>After sorting array element acoridng key in decending<br>";
print_r($ar);
?>