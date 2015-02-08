$(document).ready(function(){

var $bountyh = $('#test');
$.ajax
    ({
        type: "GET",
        dataType : 'json',
        url: 'general.json',
        success: function (bounties) {
            $.each(bounties, function(i, bounty){
                $bountyh.append('<li> Name: ' + bounty.name + 'Bounty: ' + bounty.bounty +'</li>');
            });
        },
        complete: function() {
        setTimeout(repeatAjax,2000); //After completion of request, time to redo it after a second
             }
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


