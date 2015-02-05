$(document).ready(function(){

var $menu = $('ul > li > ul > li');

$menu.mouseenter(function() {
$menu.fadeTo('fast', 0.8);
});
$menu.mouseleave(function() {
$menu.fadeTo('fast', 1);
  

});
});


