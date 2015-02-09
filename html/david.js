$(document).ready(function(){
setTimeout("ajaxd()",1000);
});

function ajaxd(){
$.ajax({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        success: function (bounty) {
        for (i=0; i <= bounty.length - 1; i++){
                $('#test').append('<li id="remove"> Name: ' + bounty[i].name + ', Bounty: ' + bounty[i].prize + '</li>')
        };
        }
        
});
};
