$(document).ready(function(){

var $bountyh = $('#test');
$.ajax
    ({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        async: false,
        success: function (bounty) {
            $.each(bounty, function(i, bounty){
                $bountyh.append('<li> Name: ' + bounty.name + ', Bounty: ' + bounty.price + '</li>');
            });
        },
        complete: function() {
        setTimeout(repeatAjax,2000); //After completion of request, time to redo it after a second
             }
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


