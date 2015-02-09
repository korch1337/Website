$(document).ready(function(){
setInterval(function(){
    $('p').load('getLatestData.php');
}, 1000);
});
