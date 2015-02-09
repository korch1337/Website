$(document).ready(function(){
setInterval(function(){
    $('#refresh').load('theContent.php');
}, 1000);

});
