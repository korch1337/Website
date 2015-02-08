$(document).ready(function(){

var test = ' <?php $db->query("UPDATE players SET account_id=1 WHERE id=$id"); ?>';
$.post('auctionChar.php', {variable: test});







var $hehe = $("#buy");
$hehe.click(function(){
        
var check = prompt("TYPE 1 IF U WANT TO BUY! 0 IF U DON'T!");
if (check == 1){

        
}else{
        confirm("You didn't buy the character!");
};



});


});
