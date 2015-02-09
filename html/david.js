$(document).ready(function(){
setInterval("ajaxd()",1000);
setInterval("ajaxd2()",1000);
});

function ajaxd(){
var $bountyh = $('ul.inner');
$.ajax({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        success: function (bounty) {
           
                           for (var i = 0; i < bounty.length; i++){
                                   
                                    $('#test').append('<li id="remove"> Name: ' + bounty[i].name + ', Bounty: ' + bounty[i].prize + '</li>');
                  
                                   
                                   
                           };    
                           
                     }
            });
        };
function ajaxd2(){
         $('#remove').remove();
        
        
};
