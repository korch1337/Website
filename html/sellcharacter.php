<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; require 'connect.php'; ?>

<h1>Sell Your Character</h1>
<p>Enter char id: </p>
<form action="sellcharacter.php" method="post">
ID: <input type="text" name="id">
<input type="submit" name="submit" value="Auction">
</form>

<?php

function sell(){
  echo 'hej';
}

if(isset($_POST['submit']))
{
   sell();
} 

?>

<?php include 'layout/overall/footer.php'; ?>
