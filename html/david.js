$(document).ready(){
var $menu = $("ul li:first-child");

$menu.mouseenter(function() {
  $menu.fadeTo('fast', 0.8);
  

});
$menu.mouseleave(function() {
  $menu.fadeTo('fast', 1);
  

});

};
