$(document).ready(function(){
setInterval("ajaxd()",10000);
});

function ajaxd(){
var $bountyh = $('#test');
$.ajax({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        async: false,
        success: function (bounty) {
            $.each(bounty, function(i, bounty){
                $bountyh.append('<li> Name: ' + bounty.name + ', Bounty: ' + bounty.price + '</li>');
            });
        },
    });
    
    
    
};
