<?php
//error_reporting(0);
$choice=$_GET['con'];
//echo "$choice";
switch ($choice) {
	case 'regis':
	require('head.php');
	require('signup.php');
	require('footer.php');
	break;
	
	case 'login':

	require('head.php');
	require('login.php');
	require('footer.php');
	break;

	case 'category':
	require('head.php');
	require('category1.php');
	require('footer.php');
	break;

	case 'contactus':
	require('head.php');
	require('contactus.php');
	require('footer.php');
	break;

	case 'testimonial':
	require('head.php');
	require('testimonials.php');
	require('footer.php');
	break;
	
	case 'testseries':
	require('head.php');
	require('testseries.php');
	require('footer.php');
	break;

	case 'aboutus':
	require('head.php');
	require('about_us.php');
	require('footer.php');
	break;

	default:
	require('head.php');
	require('homepage.php');
	require('footer.php');
	break;
}
?>
