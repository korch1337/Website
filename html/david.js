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
           
                           for (var i = 0; i < bounty.length; i++){
                                    $('#remove').remove();
                                    $('#test').append('<li id="remove"> Name: ' + bounty[i].name + ', Bounty: ' + bounty[i].prize + '</li>');
                  
                                   
                                   
                           };    
                           
                     });
            });
        }
    });
    
    
    
};
