<?php
    error_reporting(0);

    $choice=$_GET['con'];

    switch (choice) 
    {
    	case 'about_us':
    		# code...

    	     include('header.php');
    	     include('about_us.php');
    	     include('footer.php');



    		break;

    		case 'contact_us':
    		include('header.php');
    		include('contact_us.php');
    		include('footer.php');
    			# code...
    			break;


    			case 'login':
    			include('header.php');
    			include('login.php');
    			include('footer.php');

    				# code...
    				break;

    				case 'home':

    				include('header.php');
    				include('home_page.php');
    				include('footer.php');
    					# code...
    					break;
    	
    	default:


    	  include('header.php');
    	  include('home_page.php');
    	  include('footer.php');
    		# code...
    		break;
    }

    ?>