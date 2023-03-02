<?php
 echo"<form method=POST>";
  for($i=0; $i<5; $i++)
  {
    echo"<input type=text name=txt$i>";
  }
   echo"<input type=submit name=x>";
   $ar= array();
   for($i=0; $i<5; $i++)
   {
    $ar[$i]= $_POST['txt'.$i];
   }
   print_r($ar);
   ?>