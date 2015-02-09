$(document).ready(function(){
setInterval(function(){
    $('div').load('getLatestData.php');
}, 1000);
});
