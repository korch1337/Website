<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Zerexxa - Open Tibia Server</title>

<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />
<!-- Included CSS Files -->
<link rel="stylesheet" href="layout/stylesheets/main.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="layout/stylesheets/devices.css" type="text/css" media="screen" title="no title" charset="utf-8"  />
<link rel="stylesheet" href="layout/stylesheets/post.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="layout/stylesheets/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="layout/stylesheets/jquery.fancybox.css?v=2.1.2" type="text/css"  media="screen" />
<!--[if IE ]>
<link rel="stylesheet" href="stylesheets/ie.css"> 
<![endif]-->
</head>

<body>

<!--********************************************* Main wrapper Start *********************************************--> 
<div id="footer_image">
<div id="main_wrapper">

    <!--********************************************* Logo Start *********************************************-->
    <div id="logo"> <a href="#"><img alt="alt_example" src="layout/images/logo.png"  /></a>
      <div id="social_ctn"> 
      
      <a class="social_t"><img alt="alt_example" src="layout/images/social_tleft.png" /></a> 
  
      <a href="#" id="rss"><img alt="alt_example" src="layout/images/blank.gif" width="100%" height="37px" /></a> 
      <a href="#" id="facebook"><img alt="alt_example" src="layout/images/blank.gif" width="100%" height="37px" /></a> 
      <a href="#" id="twitter"><img alt="alt_example" src="layout/images/blank.gif" width="100%" height="37px" /></a>  
      <a href="#" id="google_plus"><img alt="alt_example" src="layout/images/blank.gif" width="100%" height="37px" /></a>
      <a href="#" id="you_tube"><img alt="alt_example" src="layout/images/blank.gif" width="100%" height="37px" /></a> 
    
      <a class="social_t" ><img alt="alt_example" src="layout/images/social_tright.png" /></a> 
      
      </div>
    
    </div>
    <!--********************************************* Logo end *********************************************--> 
    
    <!--********************************************* Main_in Start *********************************************-->
    <div id="main_in">  
      
    <!--********************************************* Mainmenu Start *********************************************-->
    <div id="menu_wrapper">
      <div id="menu_left"></div>
      <ul id="menu">
        <li><a href="index.php">Home</a></li>
	<?php
						if (user_logged_in() === true) {
							include 'layout/widgets/loggedin.php'; 
						} else {
							include 'layout/widgets/login.php'; 
						}
						if (user_logged_in() && is_admin($user_data)) include 'layout/widgets/Wadmin.php'; 
					?>
        <li><a href="#">Community</a>
        	<ul>
                <li><a href="forum.php">Forum</a></li>
		  <li><a href="deaths.php">Deaths</a></li>
		  <li><a href="killers.php">Killers</a></li>
		  <li><a href="whoisonline.php">Players Online</a></li>
                <li class="drop_last"><a href="highscores.php" >Highscores</a></li>
            </ul>
        </li>
        <li><a href="#">Library</a>
        	<ul>
                <li><a href="downloads.php">Downloads</a></li>
		  <li><a href="market.php">Item Market</a></li>
		  <li><a href="houses.php">Houses</a></li>
		  <li><a href="guilds.php">Guilds</a></li>
                <li class="drop_last"><a href="guildwar.php" >Guild Wards</a></li>
            </ul>
        </li>
        <li><a href="#">Information</a>
        	<ul>
                <li><a href="serverinfo.php">Server Info</a></li>
                <li class="drop_last"><a href="#" >Staff</a></li>
            </ul>
        </li>
        <li><a href="#">Shop</a>
        	<ul>
                <li><a href="buypoints.php">Buy Points</a></li>
                <li class="drop_last"><a href="shop.php" >Shop Offers</a></li>
            </ul>
        </li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
        <a href="#" id="pull">Menu</a>
      <div id="menu_right"></div>
      <div class="clear"></div>
    </div>
    
    <!--********************************************* Mainmenu end *********************************************--> 


     <!--********************************************* Main start *********************************************-->

            <!-- Full page wrapper Start -->
            <div id="full_page_wrapper">
                    	
                <div class="header">
                	<h2><span>Zerexxa</span></h2>
                </div>
                 
                <div id="post_wrapper">
                
                    
                    <!-- Body Start -->
                    <div id="body">
