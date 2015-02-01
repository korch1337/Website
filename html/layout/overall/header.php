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
  <meta http-equiv="content-type" content="text/html; charset=windows-1252; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="layout/main.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Zerexxa<a href="#"> OT</a></h1>
        <div class="slogan">Learn to play noobs!</div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <ul>
		  <li class="current"><a href="index.php">Home</a></li>
		  
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
      <div id="sidebar_container">
        <img class="paperclip" src="layout/images/paperclip.png" alt="paperclip" />
        <?php include 'layout/rightwidgets.php'; ?>
        <img class="paperclip" src="layout/images/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Top 5 players</h3>
          <p>1. asdads<br>2. asdsad</p>
          
        </div>
        <img class="paperclip" src="layout/images/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Wanted list:</h3>
          <h4>Find and kill these people!</h4>
          <p>1. David<br /><a href="#">List of all</a></p>
        </div>
      </div>
      <div class="content">
