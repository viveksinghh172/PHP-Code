<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jQuery lightBox plugin</title>

	<link rel="stylesheet" type="text/css" href="../style-projects-jquery.css" />    
    
    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
   	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		background-color:#FFFFFF;
		padding: 10px;
		width: 550px;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 15px;
	}
	#gallery ul a:hover img {
		border: 5px solid #33CCFF;
		border-width: 5px 5px 15px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	</style>
</head>

<body>
<br />
<center><font face="Lucida Handwriting" size="+2" color="#00CCFF" style="font-weight:bold">Gallery</font></center>

<div id="gallery">
    <center>
	<?php
	echo "<ul>";
	$p="#gallery";
	$op=opendir("photos");
	while($fr=readdir($op))
	{
	 if($fr!=".." and $fr!="." and $fr!="Thumbs.db")
	 {
        echo "<li>";
            echo "<a href='photos/$fr' title=''>";
                echo "<img src='photos/$fr' width='90' height='100' alt='' />";
            echo "</a>";
        echo "</li>";
        }
		}
   echo "</ul>";
   ?>
   </center>
</div>
</body>
</html>