$(document).ready(function(){

var $bountyh = $('#test');
$.ajax
    ({
        type: 'GET',
        url: 'general.json',
        success: function (bounty) {
            $.each(bounty, function(i, bounties){
                $bountyh.append('<li> Name: ' + bounties.name + 'Bounty: ' + bounties.price +'</li>');
            });
        },
        complete: function() {
        setTimeout(repeatAjax,2000); //After completion of request, time to redo it after a second
             }
        failure: function() {alert("Error!");}
    });
});



//var $menu = $('ul > li > ul > li');

//$menu.mouseenter(function() {
//$(this).fadeTo('fast', 0.2);
//});
//$menu.mouseleave(function() {
//$(this).fadeTo('slow', 1);
  

//});
//});//


