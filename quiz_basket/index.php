<?php
error_reporting(0);
$choice=$_GET['con'];
switch ($choice) {
	case 'regis':
		# code...
	require('header.php');
	require('registration.php');
	require('footer.php');
		break;
		case 'login':
		# code...
	require('header.php');
	require('login.php');
	require('footer.php');
		break;
	
	default:
	require('header.php');
	require('home_page.php');
	require('footer.php');
		break;
}
?>


