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
    
    <div id="site_content">
      
      <div class="content">
