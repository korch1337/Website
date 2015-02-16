<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Zerexxa - Open Tibia Server</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />
<!-- Included CSS Files -->
<link rel="stylesheet" href="layout/stylesheets/main.css" />
<link rel="stylesheet" href="layout/stylesheets/devices.css" />
<link rel="stylesheet" href="layout/stylesheets/paralax_slider.css" />
<link rel="stylesheet" href="layout/stylesheets/jquery.fancybox.css?v=2.1.2" type="text/css"  media="screen" />
<!--[if IE]>
<link rel="stylesheet" href="stylesheets/ie.css"> 
<![endif]-->


</head>

<body>

<!--********************************************* Main wrapper Start *********************************************-->
<div id="launch">
<div align="center" style="margin: 15px 0px 0px;"><noscript><div align="center" style="width: 140px; border: 1px solid rgb(204, 204, 204); text-align: center; color: rgb(249, 249, 255); font-weight: bold; font-size: 12px; background-color: rgb(0, 0, 0);"><a href="http://mycountdown.org/Event/Launch/" style="text-decoration: none; font-size: inherit; color: rgb(249, 249, 255);">Launch </a></div></noscript><script type="text/javascript" src="http://mycountdown.org/countdown.php?cp2_Hex=000000&cp1_Hex=F9F9FF&img=1&hbg=0&fwdt=290&lab=1&ocd=Launch&text1=Launch&text2=Server Launch&group=Event&countdown=Launch&widget_number=3010&event_time=1424476800&timezone=UTC"></script></div>
</div>

<div id="footer_image">
  <div id="main_wrapper"> 
    
    <!--********************************************* Logo Start *********************************************-->
    <div id="logo"> <a href="#"><img alt="alt_example" src="layout/images/logo2.png"  /></a>
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
	<?php require_once 'engine/init.php';
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
                <li class="drop_last"><a href="guildwar.php" >Guild Wars</a></li>
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
    <div class ="charsearch">
    <form action="login.php" method="post">
				&nbsp;<i style="font-size:11px">Account number:</i> <br>
			<input type="text" name="username"> <br>
				&nbsp;<i style="font-size:11px">Password:</i> <br>
			<input type="password" name="password">
			<br><br><input type="submit" value="Log in">
			<?php
				/* Form file */
				Token::create();
			?>
		</form>
    </div>
    
    <!--********************************************* Banner start *********************************************-->
    <div id="da-slider" class="da-slider">
      <div class="da-slide">
        <h2><a href="#" class="da-link">For gamer by gamers</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
          Ut iaculis lorem vitae arcu elementum pellentesque. <br />
          Praesent pellentesque ornare neque id lobortis.</p>
        <div class="da-img"><img alt="alt_example" src="layout/images/patrik1.jpg"  /></div>
      </div>
      <div class="da-slide">
        <h2><a href="#" class="da-link">Blade and Soul</a></h2>
        <p>Phasellus ac leo turpis. Morbi at pulvinar augue. <br />
          Aenean rhoncus ultrices volutpat. Vivamus eget enim ut orci iaculis condimentum sed a quam. </p>
        <div class="da-img"><img alt="alt_example" src="layout/images/patrik2.jpg"  /></div>
      </div>
      <div class="da-slide">
        <h2><a href="#" class="da-link">Final Fantasy XIV</a></h2>
        <p>Etiam eu massa lectus. Nunc mi velit, commodo ut ullamcorper et, consectetur vel dolor. Etiam tincidunt convallis metus non suscipit.</p>
        <div class="da-img"><img alt="alt_example" src="layout/images/patrik3.jpg"  /></div>
      </div>
      <div class="da-arrows"> <span class="da-arrows-prev"></span> <span class="da-arrows-next"></span> </div>
    </div>
    
    <!--********************************************* Banner end *********************************************-->
    
    <div class="top_shadow"></div>
    
    <!--********************************************* Hot news start *********************************************-->
    <div id="hot_news">
      <div class="header">
        <h1><span>Zerexxa //</span> HOT NEWS</h1>
      </div>
      
      <!-- Previous and next selector --> 
      <a id="prev" class="prev" href="#"><img alt="alt_example" src="layout/images/blank.gif" width="21" height="33" border="0" /></a> <a id="next" class="next" href="#"><img alt="alt_example" src="layout/images/blank.gif" width="21" height="33" border="0" /></a>
      <ul id="hot_news_box">
        <li>
          <h2><a href="./post.html">Battlefield 3 expansion!</a></h2>
          <div class="image"><a href="./post.html"><img alt="alt_example" src="layout/images/media/full/1.jpg"/></a></div>
          <div class="content">
            <p>Nam dignissim nulla mattis justo aliquet luctus. Mauris venenatis eros. Nam in leo libero. In hac habitasse platea dictumst. Phasellus aliquet aliquam sto,dignissi
              eistoteles anarequi et son amorites etimo nurli.</p>
            <div class="info"> <a href="./post.html" class="comments">18 Comments</a> <a href="./post.html" class="read_more">read more</a> </div>
          </div>
        </li>
        <li>
          <h2><a href="./post.html">Dead space looking good</a></h2>
          <div class="image"><a href="./post.html"><img alt="alt_example" src="layout/images/media/full/1.jpg" /></a></div>
          <div class="content">
            <p>Nam dignissim nulla mattis justo aliquet luctus. Mauris venenatis eros. Nam in leo libero. In hac habitasse platea dictumst. Phasellus aliquet aliquam sto,dignissi
              eistoteles anarequi et son amorites etimo nurli.</p>
            <div class="info"> <a href="./post.html" class="comments">18 Comments</a> <a href="./post.html" class="read_more">read more</a> </div>
          </div>
        </li>
        <li>
          <h2><a href="./post.html">Dead space new footage</a></h2>
          <div class="image"><a href="#"><img alt="alt_example" src="layout/images/media/full/1.jpg" /></a></div>
          <div class="content">
            <p>Nam dignissim nulla mattis justo aliquet luctus. Mauris venenatis eros. Nam in leo libero. In hac habitasse platea dictumst. Phasellus aliquet aliquam sto,dignissi
              eistoteles anarequi et son amorites etimo nurli.</p>
            <div class="info"> <a href="./post.html" class="comments">18 Comments</a> <a href="./post.html" class="read_more">read more</a> </div>
          </div>
        </li>
        <li>
          <h2><a href="./post.html">Owning at DayZ</a></h2>
          <div class="image"><a href="#"><img alt="alt_example" src="layout/images/media/full/1.jpg" /></a></div>
          <div class="content">
            <p>Nam dignissim nulla mattis justo aliquet luctus. Mauris venenatis eros. Nam in leo libero. In hac habitasse platea dictumst. Phasellus aliquet aliquam sto,dignissi
              eistoteles anarequi et son amorites etimo nurli.</p>
            <div class="info"> <a href="./post.html" class="comments">18 Comments</a> <a href="./post.html" class="read_more">read more</a> </div>
          </div>
        </li>
        <li>
          <h2><a href="./post.html">LoL tournament </a></h2>
          <div class="image"><a href="#"><img alt="alt_example" src="layout/images/media/full/1.jpg" /></a></div>
          <div class="content">
            <p>Nam dignissim nulla mattis justo aliquet luctus. Mauris venenatis eros. Nam in leo libero. In hac habitasse platea dictumst. Phasellus aliquet aliquam sto,dignissi
              eistoteles anarequi et son amorites etimo nurli.</p>
            <div class="info"> <a href="./post.html" class="comments">18 Comments</a> <a href="./post.html" class="read_more">read more</a> </div>
          </div>
        </li>
        <li>
          <h2><a href="./post.html">MOHW not as good as planned</a></h2>
          <div class="image"><a href="#"><img alt="alt_example" src="layout/images/media/full/1.jpg" /></a></div>
          <div class="content">
            <p>Nam dignissim nulla mattis justo aliquet luctus. Mauris venenatis eros. Nam in leo libero. In hac habitasse platea dictumst. Phasellus aliquet aliquam sto,dignissi
              eistoteles anarequi et son amorites etimo nurli.</p>
            <div class="info"> <a href="./post.html" class="comments">18 Comments</a> <a href="./post.html" class="read_more">read more</a> </div>
          </div>
        </li>
      </ul>
    </div>
    <!--********************************************* Hot news end *********************************************--> 
    
    <!--********************************************* Main start *********************************************-->
   
    
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 
    

    
    <!--********************************************* Footer start *********************************************-->
    <div id="footer">
    <div class="row">
      <div class="footer_widget">
        <div class="header"><a href="#">About Zerexxa</a></div>
        <div class="body">
          <p><img alt="alt_example" src="layout/images/about_img.png" align="left" style="margin:0px 15px 5px 0px;"  />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <p>Praesent aliquet justo quis lacus mollis molestie pellentesque habitant morbi tristique senectus et e. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque pulvinar urna eget ante pharetra vitae fermentum dui sagittis. Vivamus non ipsum elit, et tincidunt quam.</p>
          <img alt="alt_example" src="layout/images/orizon_about.png" style="margin:11px 0px 0px 55px;"/></div>
      </div>
      <div class="divider_footer"></div>
      <div id="latest_media">
        <div class="header"><a href="#">latest media</a></div>
        <div class="body">
          <?php include 'layout/widgets/footerpics.php'; ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    </div>
    <!--********************************************* Footer end *********************************************--> 
    <div class="clear"></div>
    <!--********************************************* Twitter feed start *********************************************-->
    <div id="twitter_last"> <a id="tr_left" href="#"><img alt="alt_example" src="layout/images/blank.gif" width="100%" height="30px" border="0" /></a>
      <div id="tr_right">
        <ul id="tw">
        </ul>
      </div>
    </div>
    <!--********************************************* Twitter feed end *********************************************--> 
  
  </div>
  <!--********************************************* Main_in end *********************************************--> 
  
  <a id="cop_text" href="http://themeforest.net/user/Skywarrior"> Made by Skywarrior Themes</a> 
  </div>
</div>
<!--********************************************* Main wrapper end *********************************************--> 

<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="layout/javascript/jquery.carouFredSel-6.1.0.js" type="text/javascript"></script> 
<script src="layout/javascript/jquery.cslider.js" type="text/javascript" ></script> 
<script src="layout/javascript/modernizr.custom.28468.js" type="text/javascript"></script> 
<script src="layout/javascript/getTweet.js" type="text/javascript" ></script> 
<script src="layout/javascript/jquery.fancybox.js?v=2.1.3" type="text/javascript" ></script> 

<!--******* Javascript Code for the Hot news carousel *******--> 
<script type="text/javascript">
	$(document).ready(function() {
	
		// Using default configuration
		$("#sd").carouFredSel();
		
		// Using custom configuration
		$("#hot_news_box").carouFredSel({
			items				: 1,
			direction			: "right",
			prev: '#prev',
			next: '#next',
			scroll : {
				items			: 1,
				height			: 250,
				easing			: "quadratic",
				duration		: 2000,							
				pauseOnHover	: true
			}	
		});	
	})
</script> 


<!--******* Javascript Code for the Main banner *******--> 
<script type="text/javascript">
	$(function() {
	
		$('#da-slider').cslider({
			autoplay	: true,
			bgincrement	: 450
		});
	
	});
</script> 

<!--******* Javascript Code for the image shadowbox *******--> 
<script type="text/javascript">
$(document).ready(function() {
	/*
	*  Simple image gallery. Uses default settings
	*/
	
	$('.shadowbox').fancybox();
});
</script>

<!--******* Javascript Code for the menu *******-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#menu li').bind('mouseover', openSubMenu);
        $('#menu > li').bind('mouseout', closeSubMenu);

        function openSubMenu() {
            $(this).find('ul').css('visibility', 'visible');
        };

        function closeSubMenu() {
            $(this).find('ul').css('visibility', 'hidden');
        };
    });
</script>

<script type="text/javascript">
    $(function() {
        var pull    = $('#pull');
        menu 		= $('ul#menu');

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 767 && $('ul#menu').css('visibility', 'hidden')) {
                $('ul#menu').removeAttr('style');
            };
            var menu = $('#menu_wrapper').width();
            $('#pull').width(menu - 20);
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        var menu = $('#menu_wrapper').width();
        $('#pull').width(menu - 20);
    });
</script>
</body>
</html>
