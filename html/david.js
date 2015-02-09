$(document).ready(function(){
setInterval("ajaxd()",10000);
});

function ajaxd(){
var $bountyh = $('ul.inner');
$.ajax({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        success: function (bounty) {
            $.each(bounty, function(i, bounty){
                $("div.inner").replaceWith('<li> Name: ' + bounty.name + ', Bounty: ' + bounty.price + '</li>');
            });
        },
    });
    
    
    
};
