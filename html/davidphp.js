$(document).ready(function(){
setInterval(phpfilen(), 10000);
});

function phpfilen(){
$.ajax({
    type: 'GET',
    url: 'getLatestData.php',
    async: true,
    success: function(data){
    $('p').load('getLatestData.php');
            
        }
    
});

};
