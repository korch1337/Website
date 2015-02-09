$(document).ready(function(){
setTimeout("ajaxd()",1000);
});

function ajaxd(){
var $bountyh = $('ul.inner');
$.ajax({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        success: function (bounty) {
        for (i=0; i <= 2; i++){
                $('#test').append('<li id="remove"> Name: ' + bounty[i].name + ', Bounty: ' + bounty[i].prize + '</li>')
                
        };
        }
        
});
};
