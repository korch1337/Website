			<div class="right">
				
				<div class="sidebar" style="font-family: martel; font-size:17px">Account</div>
					<?php
						if (user_logged_in() === true) {
							include 'layout/widgets/loggedin.php'; 
						} else {
							include 'layout/widgets/login.php'; 
						}
						if (user_logged_in() && is_admin($user_data)) include 'layout/widgets/Wadmin.php'; 
					?>

				<div class="sidebar" style="font-family: martel; font-size:17px">Community</div>
				<ul class="inner">
					<li><a href="market.php">&nbsp;&raquo; Item Market</a></li>
					<li><a href="gallery.php">&nbsp;&raquo; Gallery</a></li>
					<li><a href="deaths.php">&nbsp;&raquo; Deaths</a></li>
					<li><a href="killers.php">&nbsp;&raquo; Killers</a></li>
					<li><a href="whoisonline.php">&nbsp;&raquo; Players Online</a></li>
					<li><a href="highscores.php">&nbsp;&raquo; Highscores</a></li>
					<li><a href="houses.php">&nbsp;&raquo; Houses</a></li>
					<li><a href="guilds.php">&nbsp;&raquo; Guilds</a></li>
					<li><a href="guildwar.php">&nbsp;&raquo; Guild Wars</a></li>
				</ul>
			
				 <!-- <div class="sidebar" style="font-family: martel; font-size:17px">Library</div>
				 <ul class="inner"> 
					 <li><a href="sub.php?page=map">&nbsp;&raquo; Map</a></li>
					 <li><a href="sub.php?page=monsters">&nbsp;&raquo; Monsters</a></li>
					 <li><a href="sub.php?page=experiencetable">&nbsp;&raquo; Experience</a></li>
				</ul> -->
				
				<div class="sidebar" style="font-family: martel; font-size:17px">Information</div>
				<ul class="inner"> 
					<li><a href="serverinfo.php">&nbsp;&raquo; Server Info</a></li>
					<li><a href="support.php">&nbsp;&raquo; Staff</a></li>
				</ul>
				
				<div class="sidebar" style="font-family: martel; font-size:17px">Shop</div>
				<ul class="inner"> 
					<li><a href="buypoints.php">&nbsp;&raquo;Buy Points</a></li>
					<li><a href="shop.php">&nbsp;&raquo;Shop Offers</a></li>
				</ul>
				
			</div> 
