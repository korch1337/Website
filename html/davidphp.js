$(document).ready(function(){
setInterval(phpfilen(), 1000);
});

function phpfilen(){
$.ajax({
    type: 'GET',
    url: 'getLatest.php',
    async: true,
    success: function(data){
    $('p').load('getLatestData.php');
            
        }
    
});

};
