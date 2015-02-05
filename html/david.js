$(document).ready(function(){

var $menu = $('ul > li > ul > li');

$menu.mouseenter(function() {
$(this).fadeTo('fast', 0.2);
});
$menu.mouseleave(function() {
$(this).fadeTo('fast', 1);
  

});
});


