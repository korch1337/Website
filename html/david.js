$(document).ready(function(){
setInterval(ajaxd,1000);
});

function ajaxd(){
$.ajax({
        type: 'GET',
        url: 'http://176.9.35.68/getLatestData.php',
        dataType: 'json',
        async: true,
        success: function (bounty) {
                 $('#test').empty();
        for (i=0; i <= bounty.length - 1; i++){
                $('#test').append('<li id="remove"> Name: ' + bounty[i].name + ', Bounty: ' + bounty[i].prize + '</li>')
        };
        }
        
});
};
