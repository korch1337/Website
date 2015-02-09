$(document).ready(function(){
setInterval("ajaxd()",1000);
});

function ajaxd(){
var $bountyh = $('ul.inner');
$.ajax({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        success: function (bounties) {
            $.each(bounties, function(i, bounties){
                    $('#remove').remove();
                $('#test').append('<li id="remove"> Name: ' + bounty.name + ', Bounty: ' + bounty.price + '</li>');
                
            });
        }
    });
    
    
    
};
