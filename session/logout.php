<?php

   session_start();
   session_destroy();
   $location="index.php";
   header("location:$location");

?>