$(document).ready(function(){

$.ajax
    ({
        type: "GET",
        dataType : 'json',
        async: true,
        url: 'david.php',
        data: { data: JSON.stringify(eventsholded) },
        success: function () {alert("Thanks!"); },
        failure: function() {alert("Error!");}
    });



//var $menu = $('ul > li > ul > li');

//$menu.mouseenter(function() {
//$(this).fadeTo('fast', 0.2);
//});
//$menu.mouseleave(function() {
//$(this).fadeTo('slow', 1);
  

//});
//});//


