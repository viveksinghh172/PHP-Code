<?php

 //1 var_dump((int)(25/7));   o/p is int3



//		2 echo ("hello world 1<br>");
//		 print("hello world 2");
//		 printf("hello world 3");
//		 sprintf("hello world 4"); //----this will not print hello world




//	3 if (print"hi" -1) 
//	 print "hello";  //-------------------o/p -1hello




//4 $x=1;
// if($x==3)
// print"hii";
// elseif ($x=3) 
	
//   print $x;
// else
// 	print "how are you";--------------o/p  3



//5 echo strlen('foo', chr(0),'l'),;;strlen(0x00);  error




//6 $a="1";
// switch ($a) 
// {
// 	case 1:
// 		print"hi";
// 	case 2:
// 	    print"hello";
// 	default:
// 	    print"hi1";
// }//----------------------------------o/p  hihellohi1




//7 $a = array("a"=>"india","b"=>"brazil","c"=>"china");
// echo array_shift($a);
// echo "<br>";
// array_pop($a);-------------------------o/p        india
// print_r($a);                                      Array([b]=>brazil)




// $fruits=array("apple","orange",array("pear","mango"),"banana");
// echo(count($fruits, 1)).'<br>'//;------------------o/p             6
// echo(count($fruits));                                      //      4




//9 $state[]=array("karnataka");
// print_r($state);
// $state=array("karnataka");
// print_r($state);




// $array=array(1,2,3,5,8,13,21,34,55);
// $sum=0;
// for ($i=0; $i <5  ; $i++) 
// { 
// 	$sum+=$array[$array[$i]];
// }
// echo $sum;   //-----------------------o/p        78



//$a='1';
//$b='&a';
//$b='2$a';
//echo $a.",".$b; //----------------------o/p  1,2$a




//11 $url="nachiketh@example.com";
// echo ltrim(strstr($url,"@"),"@");-----o/p   example.com





   for($i=1;$i<=5;$i++)
  {
    for($j=4;$j>=$i;$j--)
    {
         echo "&nbsp;&nbsp;";
     }
       for($j=1;$j<=$i;$j++)
       {
           echo "*";
       }
       for($j=2;$j<=$i;$j++)
      {
           echo "*";
       }
      echo "<br/>";
   }







// for($i=1;$i<=5;$i++)
//  {
//    for($j=4;$j>=$i;$j--)
//    {
//        echo "&nbsp;&nbsp;";
//    }
//      for($j=1;$j<=$i;$j++)
//      {
//          echo "*";
//      }
//      for($j=2;$j<=$i;$j++)
//      {
//          echo "*";
//      }
//      echo "<br/>";
//  }
//  for($i=5;$i>=1;$i--)
//  {
//    for($j=4;$j>=$i;$j--)
//    {
//        echo "&nbsp;&nbsp;";
//    }
//      for($j=1;$j<=$i;$j++)
//      {
//          echo "*";
//      }
//      for($j=2;$j<=$i;$j++)
//      {
//          echo "*";
//      }
//      echo "<br/>";
//  }





 // for($i=9;$i>=1;$i--)
 //  {
 //    for($j=9;$j>=$i;$j--)
 //    {
 //        echo "&nbsp;";
 //    }
 //      for($j=1;$j<=$i;$j++)
 //      {

 //          echo $i;
 //          echo "&nbsp;";
 //      }
 //      // for($j=2;$j<=$i;$j++)
 //      // {
 //      //     echo "*";
 //      // }
 //      echo "<br/>";
 //  }






?>