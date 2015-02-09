$(document).ready(function(){
setInterval(phpfilen(), 1000);
});

function phpfilen(){
$.ajax({
    type: 'GET',
    url: 'getLatestData.php',
        dataType: 'php',
        async: true,
        success: success
    
});

};
