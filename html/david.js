$(document).ready(){
var $menu = $('ul');

$menu.mouseenter(function() {
  $menu.fadeTo('fast', 0.8);
  

});
$menu.mouseleave(function() {
  $menu.fadeTo('fast', 1);
  

});

};
