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
 <li><a href="#" class="notificationIcons"><img src='img/twitter.png' alt="" /></a></li>
 <li><a href="#" class="notificationIcons"><img src='img/rss.png' alt="" /></a></li>
 <li>
 <a href="#" class="notificationIcons"><img src='img/facebook.png' alt="" />
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
  </div>
</body>
</html>
