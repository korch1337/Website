$(document).ready(function(){

var $menu = $('.menu > ul > li > ul');

$menu.mouseenter(function() {
$menu.fadeTo('fast', 0.8);
});
$menu.mouseleave(function() {
$menu.fadeTo('fast', 1);
  

});
});


