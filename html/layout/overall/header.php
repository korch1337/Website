<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>

<head>
  <title>Zerexxa OT</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/css; charset=utf-8;" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="layout/main.css" />
</head>
<body>

  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Zerexxa<a href="#"> OT</a></h1>
        <div class="slogan">Welcome to the best open tibia server ever!</div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <ul>
		  <li><a href="index.php">Home</a>
		  <ul>
		  <li><a href="downloads.php">Downloads</a></li>
		  <li><a href="forum.php">Forum</a></li>
		  </ul>
		  </li>
		  
		  <li><a href="index.php">Account</a>
		  <ul>
		  <li><a href="register.php">Create Account</a></li>
		  <li><a href="recovery.php">Lost Account</a></li>
		  </ul>
		  </li>
		  
          <li><a href="#">Community</a>
		  <ul>
		  <li><a href="market.php">Item Market</a></li>
		  <li><a href="gallery.php">Gallery</a></li>
		  <li><a href="deaths.php">Deaths</a></li>
		  <li><a href="killers.php">Killers</a></li>
		  <li><a href="whoisonline.php">Players Online</a></li>
		  <li><a href="highscores.php">Highscores</a></li>
		  <li><a href="houses.php">Houses</a></li>
		  <li><a href="guilds.php">Guilds</a></li>
		  <li><a href="guildwar.php">Guild Wars</a></li>
		  </ul>
		  </li>
		  
          <li><a href="#">Information</a>
		  <ul>
		  <li><a href="serverinfo.php">Server Info</a></li>
		  <li><a href="#">Staff</a></li>
		  </ul>
		  </li>
          <li><a href="#">Shop</a>
		  <ul>
		  <li><a href="buypoints.php">Buy Points</a></li>
		  <li><a href="shop.php">Shop Offers</a></li>
		  </ul>
		  </li>
		 
		 </ul>
        </ul>
		
		
      </div>
    </div>
    
    <div id="footer">
 <ul id="footer_menu">
 
 <li class="homeButton"><a href="#"></a></li>
 
 <?php
						if (user_logged_in() === true) {
							include 'layout/widgets/loggedin.php'; 
						} else {
							include 'layout/widgets/login.php'; 
						}
						if (user_logged_in() && is_admin($user_data)) include 'layout/widgets/Wadmin.php'; 
					?>
 
 </ul><!-- End Footer Menu -->
 
 <ul id="notifications">
 <li><a href="#" class="notificationIcons"><img src='layout/images/twitter.png' alt="" /></a></li>
 <li><a href="#" class="notificationIcons"><img src='layout/images/rss.png' alt="" /></a></li>
 <li>
 <a href="#" class="notificationIcons"><img src='layout/images/facebook.png' alt="" />
 <span> <!-- The span is the text appearing on hover, use the notificationIcons class in the link -->
 <img src="http://buckysroom.com/images/defaultProfileImage.png" style="float:left;width:24px;margin-right:5px;"/>
 <div style="display:inline;color:#CC0000;font-weight:bold;">Emily May</div> liked your post "What is your favorite book of all time?"
 <hr style="border:none;border-bottom:1px solid #777777;"/>
 <img src="http://buckysroom.com/images/defaultProfileImage.png" style="float:left;width:24px;margin-right:5px;"/>
 <div style="display:inline;color:#CC0000;font-weight:bold;">Emily May</div> liked your post "What is your favorite book of all time?"
 <hr style="border:none;border-bottom:1px solid #777777;"/>
 <img src="http://buckysroom.com/images/defaultProfileImage.png" style="float:left;width:24px;margin-right:5px;"/>
 <div style="display:inline;color:#CC0000;font-weight:bold;">Emily May</div> liked your post "What is your favorite book of all time?"
 </span>
 </a>
 </li>
 </ul>
 
 </div>
 
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="../jquery-scrolltofixed.js"></script>
    <script type="text/javascript">
        $('#footer').scrollToFixed();
    </script>
    
    <div id="sidebar_container">
        <?php include 'layout/rightwidgets.php'; ?>
      </div>
    <div id="site_content">
      
      <div class="content">
