$(document).ready(){
var $menu = $('li :nth-child(2)');

$menu.mouseenter(function() {
  $menu.fadeTo('fast', 0.8);
  

});
$menu.mouseleave(function() {
  $menu.fadeTo('fast', 1);
  

});

};
