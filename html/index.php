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
    
    <!--********************************************* Banner start *********************************************-->
    <div id="da-slider" class="da-slider">
      <div class="da-slide">
        <h2><a href="#" class="da-link">For gamer by gamers</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
          Ut iaculis lorem vitae arcu elementum pellentesque. <br />
          Praesent pellentesque ornare neque id lobortis.</p>
        <div class="da-img"><img alt="alt_example" src="layout/images/paralax_banner/3.png"  /></div>
      </div>
      <div class="da-slide">
        <h2><a href="#" class="da-link">Blade and Soul</a></h2>
        <p>Phasellus ac leo turpis. Morbi at pulvinar augue. <br />
          Aenean rhoncus ultrices volutpat. Vivamus eget enim ut orci iaculis condimentum sed a quam. </p>
        <div class="da-img"><img alt="alt_example" src="layout/images/paralax_banner/2.png"  /></div>
      </div>
      <div class="da-slide">
        <h2><a href="#" class="da-link">Final Fantasy XIV</a></h2>
        <p>Etiam eu massa lectus. Nunc mi velit, commodo ut ullamcorper et, consectetur vel dolor. Etiam tincidunt convallis metus non suscipit.</p>
        <div class="da-img"><img alt="alt_example" src="layout/images/paralax_banner/1.png"  /></div>
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
    <div id="main_news_wrapper">
 
       <div id="row"> 
        <!-- Left wrapper Start -->
        <div id="left_wrapper">
        <div class="header">
            <h2><span>Zerexxa //</span> GENERAL NEWS</h2>
          </div>
          <ul id="general_news">
            <li>
              <div class="image"><a href="./post.html"><img alt="alt_example" src="layout/images/media/full/1.jpg" /></a></div>
              <ul class="social_share">
                <li><a href="#"><img alt="alt_example" src="layout/images/fbk.png" border="0" /></a></li>
                <li><a href="#"><img alt="alt_example" src="layout/images/twitter.png" border="0" /></a></li>
                <li><a href="#"><img alt="alt_example" src="layout/images/more.png" border="0" /></a></li>
              </ul>
              <div class="info">
                <div class="comments"> 18 </div>
                <h2><a href="./post.html">Blade and Soul - Open beta announced!</a></h2>
                <div class="date_n_author">12 July 2012, by Admin</div>
                
               
                
                <a href="./post.html" class="read_more2">read more</a> </div>
                <div class="clear">
              </div>
            </li>
            <li>
              <div class="image"><a href="./post.html"><img alt="alt_example" src="layout/images/media/full/1.jpg" /></a></div>
              <ul class="social_share">
                <li><a href="#"><img alt="alt_example" src="layout/images/fbk.png" border="0" /></a></li>
                <li><a href="#"><img alt="alt_example" src="layout/images/twitter.png" border="0" /></a></li>
                <li><a href="#"><img alt="alt_example" src="layout/images/more.png" border="0" /></a></li>
              </ul>
              <div class="info">
                <div class="comments"> 18 </div>
                <h2><a href="./post.html">Raiderz item giveaway!</a></h2>
                <div class="date_n_author">12 July 2012, by Admin</div>
                <p>Integer tincidunt tellus ut metus viverra ac sodales odio vulputate. Ut id erat neque, sit amet tristique erat. Vivamus in turpis orci, et volutpat purus. Vestibulum lacinia, arcu id varius eleifend, eros lorem iaculis massa, vitae consequat enim diam eget massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ultrices viverra consectetur. Sed eget massa augue. Suspendisse urna lectus.</p>
                <a href="./post.html" class="read_more2">read more</a> </div>
                <div class="clear"></div>
            </li>
            <li>
              <div class="image"><a href="./post.html"><img alt="alt_example" src="layout/images/media/full/1.jpg" /></a></div>
              <ul class="social_share">
                <li><a href="#"><img alt="alt_example" src="layout/images/fbk.png" border="0" /></a></li>
                <li><a href="#"><img alt="alt_example" src="layout/images/twitter.png" border="0" /></a></li>
                <li><a href="#"><img alt="alt_example" src="layout/images/more.png" border="0" /></a></li>
              </ul>
              <div class="info">
                <div class="comments"> 18 </div>
                <h2><a href="./post.html">Dead Space 3 gameplay</a></h2>
                <div class="date_n_author">12 July 2012, by Admin</div>
                <p>Integer tincidunt tellus ut metus viverra ac sodales odio vulputate. Ut id erat neque, sit amet tristique erat. Vivamus in turpis orci, et volutpat purus. Vestibulum lacinia, arcu id varius eleifend, eros lorem iaculis massa, vitae consequat enim diam eget massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ultrices viverra consectetur. Sed eget massa augue. Suspendisse urna lectus.</p>
                <a href="./post.html" class="read_more2">read more</a> </div>
                <div class="clear"></div>
            </li>
          </ul>
          <ul id="pager">
            <li><a href="#" ><img alt="alt_example" src="layout/images/left_pager.jpg" border="0"/></a></li>
            <li><a href="#" >1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#" class="active">3</a></li>
            <li><a href="#"><img alt="alt_example" src="layout/images/right_pager.jpg" border="0"/></a></li>
          </ul>
          
          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
        
        <!-- Right wrapper Start -->
        <div id="right_wrapper">
          <div id="search">
            <input type="text" onblur="if(this.value =='') this.value='search'" onfocus="if (this.value == 'search') this.value=''" value="search" name="s" class="required" id="s" />
            <input type="button" />
          </div>
          <div class="review">
            <div class="header"><a href="#">Top games</a></div>
            <ul>
              <li>
                <div class="img"><a href="./post_game.html"><img alt="alt_example" src="layout/images/media/thumb/1.jpg" /></a></div>
                <div class="info"> <a href="./post_game.html">Dead space 3</a><br/>
                  <small>05 December 2011, 2 Comments</small><br/>
                  <img alt="alt_example" src="layout/images/stars.png" /> </div>
              </li>
              <li>
                <div class="img"><a href="./post_game.html"><img alt="alt_example" src="layout/images/media/thumb/1.jpg" /></a></div>
                <div class="info"> <a href="./post_game.html">Battlefield 3</a><br/>
                  <small>05 December 2011, 2 Comments</small><br/>
                  <img alt="alt_example" src="layout/images/stars.png" /> </div>
              </li>
              <li>
                <div class="img"><a href="./post_game.html"><img alt="alt_example" src="layout/images/media/thumb/1.jpg" /></a></div>
                <div class="info"> <a href="./post_game.html">DayZ - Arma 2 mod</a><br/>
                  <small>05 December 2011, 2 Comments</small><br/>
                  <img alt="alt_example" src="layout/images/stars.png" /> </div>
              </li>
              <li>
                <div class="img"><a href="./post_game.html"><img alt="alt_example" src="layout/images/media/thumb/1.jpg" /></a></div>
                <div class="info"> <a href="./post_game.html">League of legends</a><br/>
                  <small>05 December 2011, 2 Comments</small><br/>
                  <img alt="alt_example" src="layout/images/stars.png" /> </div>
              </li>
            </ul>
          </div>
          
          
          <div class="advert">
            <a href="http://themeforest.net/user/Skywarrior" target="_blank"><img alt="alt_example" src="layout/images/advert_r.jpg" border="0" /></a>
          </div>
          
          
          <div class="categories">
            <div class="header"><a href="#">Categories</a></div>
            <ul>
              <li> <a href="./post_list.html">Action</a> </li>
              <li> <a href="./post_list.html">Adventure</a> </li>
              <li> <a href="./post_list.html">Strategy</a> </li>
              <li> <a href="./post_list.html">RPG</a> </li>
              <li> <a href="./post_list.html">Indie</a> </li>
              <li> <a href="./post_list.html">Massive Multiplayer</a> </li>
            </ul>
          </div>
                 
      
      <!-- Right wrapper end -->
      
        </div>
      	<div class="clear"></div>
        
        </div>
      </div>
    
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 
    
    <!--********************************************* Main advert start *********************************************-->
    <div class="main_advert">
      <a href="http://themeforest.net/user/Skywarrior" target="_blank"><img alt="alt_example" src="layout/images/main_ad.png" border="0" /></a>
      
    </div>
    <!--********************************************* Main advert end *********************************************--> 
    
    <!--********************************************* Footer start *********************************************-->
    <?php include 'layout/overall/footer.php'; ?>
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
