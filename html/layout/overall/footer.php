</div>
                    <!-- Body end -->
                    
                    <div class="clear"></div>
               </div>
                            
            </div>
           


        <div class="bottom_shadow"></div>	
	<!--********************************************* Main end *********************************************-->
    
    <!--********************************************* Main advert start *********************************************-->

    <!--********************************************* Main advert end *********************************************--> 

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
<!--********************************************* Main_in Start *********************************************--> 
     
     <a id="cop_text" href="http://themeforest.net/user/Skywarrior"> Made by Skywarrior Themes</a>
     
	</div>
</div>
<!--********************************************* Main wrapper end *********************************************--> 

<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="layout/javascript/getTweet.js" type="text/javascript" ></script>
<script src="layout/javascript/jquery.fancybox.js?v=2.1.3" type="text/javascript" ></script>

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

