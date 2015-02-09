$(document).ready(function(){
setInterval(function(){
    $('#refresh').load('getLatestData.php');
}, 1000);

});
