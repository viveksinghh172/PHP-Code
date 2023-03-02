<?php
$email=$_REQUEST['mail'];
?>
<h2 align="center">Your order confirm sucessfully</h2>
<h3 align="center">Your order no is : <?php echo $_REQUEST['ord'];?></h3>
<h3 align="center">Your order no will be send to "<font color="#0033FF"><?php echo $email; ?></font>"</h3>
<h2 align="center">Thank You...</h2>