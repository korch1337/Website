<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; require 'connect.php'; ?>

<h1>Sell Your Character</h1>
<p>Enter char id: </p>
<form action="sellcharacter.php" method="post">
ID: <input type="text" name="id">
<input type="submit" name="submit" value="Auction">
</form>

<?php

function sell(){
 // $aucPlayers = $db->query("SELECT name from players WHERE id=1"); 
  // $rows = $aucPlayers->fetch_assoc();
  // echo '<pre>', print_r($rows), '</pre>';
  echo 'Patrik luktar fisk!';
}

if(isset($_POST['submit']))
{
   sell();
} 

?>

<?php include 'layout/overall/footer.php'; ?>
