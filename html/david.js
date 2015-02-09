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
                    $('#remove').remove();
                $('#test').append('<li id="remove"> Name: ' + bounty.name + ', Bounty: ' + bounty.price + '</li>');
                
            });
        };
    });
    
    
    
};
