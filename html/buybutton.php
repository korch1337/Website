$(document).ready(function(){

var $hehe = $("#buy");

$hehe.click(function(){
        
var check = prompt("TYPE 1 IF U WANT TO BUY! 0 IF U DON'T!");
if (check === "buy"){

        <?php 
        echo 'hello';
        ?>
        
}else{
        confirm("You didn't buy the character!");
};



});


});
