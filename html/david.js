$(document).ready(function(){
setInterval("ajaxd()",1000);
});

function ajaxd(){
var $bountyh = $('ul.inner');
$.ajax({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        success: function (bounty) {
            $.each(bounty, function(i, bounties){
                    $('#remove').remove();
                $('#test').append('<li id="remove"> Name: ' + bounties.name + ', Bounty: ' + bounies.price + '</li>');
                
            });
        }
    });
    
    
    
};
